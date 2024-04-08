<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function get() {
        $pets = Pet::all();
        return view('welcome', ['pets' => $pets]);
    }

    public function fetchAll() {
        $pets = Pet::all();

        return view('pet', ['pets' => $pets]);
    }

    public function fetch(int $id) {
        $pets = Pet::findOrFail($id);

        return $pets;
    }

    public function add(Request $request) {
        $model = new Pet();

        $model->fill($request->all());
        $model->save();

        return view('pet', ['pets' => Pet::all()]);

        $model = new Pet();

        $model->fill($request->except('image'));

        if($request->hasFile('image')) {

            $ext1 = $request->file('image')->extension();

            // Check file extension and raise error
            if (!in_array($ext1, ['png', 'jpg', 'jpeg'])) {
                return view('error', ['error' => 'Invalid image format. Only PNG, JPG, and JPEG formats are allowed.']);
            }

            // Store image and save path
            $path = $request->file('image')->store('pet_images', 'public');
            $model->image = $path;
        }

        $model->save();
                
        return redirect(route('pets.fetchAll'));
    }

    public function update(Request $request) {
        
        $model = Pet::findOrFail($request->id);

        $model->fill($request->all());
        $model->save();
        
        return view('pet', ['pets' => Pet::all()]);
    }

    public function delete(Request $request) {
        $pet = Pet::findOrFail($request->id);

        $pet->delete();
        return view('pet', ['pets' => Pet::all()]);
    }
}
