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
}
