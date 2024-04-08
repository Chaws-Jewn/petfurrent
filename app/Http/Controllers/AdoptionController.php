<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Adoption;

class AdoptionController extends Controller
{

    public function fetchAll()
    {
        $adoptions = Adoption::join('pets', 'adoptions.pet_id', '=', 'pets.id')
            ->get(['adoptions.id', 'adoptions.first_name', 'adoptions.last_name', 'adoptions.email_address', 'adoptions.phone_number',
                'adoptions.front_id', 'adoptions.back_id', 'pets.type', 'pets.breed', 'pets.name']);

        foreach ($adoptions as $adoption) {
            if ($adoption->front_id != null) {
                $adoption->front_id = Storage::url($adoption->front_id);
            }
            if ($adoption->back_id != null) {
                $adoption->back_id = Storage::url($adoption->back_id);
            }
        }

        return view('adoption', ['adoptions' => $adoptions]);
    }


    public function fetch(int $id) {
        $adoption = Adoption::findOrFail($id);

        return $adoption;
    }

    public function add(Request $request) {
        $request->validate([
            'front_id' => 'required|image|mimes:jpeg,png,jpg|max:4096', 
            'back_id' => 'required|image|mimes:jpeg,png,jpg|max:4096'
        ]);

        $model = new Adoption();

        $model->fill($request->except(['front_id', 'back_id']));

        if($request->hasFile('front_id') && $request->hasFile('back_id')) {

            $ext1 = $request->file('front_id')->extension();
            $ext2 = $request->file('back_id')->extension();
        }

                // Check file extension and raise error
                if (!in_array($ext1, ['png', 'jpg', 'jpeg']) || !in_array($ext2, ['png', 'jpg', 'jpeg'])) {
                    return view('error', ['error' => 'Invalid image format. Only PNG, JPG, and JPEG formats are allowed.']);
                }

                // Store image and save path
                $path = $request->file('front_id')->store('adoption_ids', 'public');
                $model->front_id = $path;

                
                $path = $request->file('back_id')->store('adoption_ids', 'public');
                $model->back_id = $path;

        $model->save();
                
        return redirect(route('adoptions.fetchAll'));
    }

    public function update(Request $request) {
        
        $model = Adoption::findOrFail($request->id);

        $model->fill($request->all());
        $model->save();
        
        return view('adoption', ['adoptions' => Adoption::all()]);
    }

    public function delete(Request $request) {
        $adoption = Adoption::findOrFail($request->id);

        $adoption->delete();
        return redirect(route('adoptions.fetchAll'));
    }
}
