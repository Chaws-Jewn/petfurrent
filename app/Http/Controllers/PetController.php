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
