<?php

namespace App\Http\Controllers;

use App\Models\Petcare;

class UserPetcareController extends Controller
{
    public function index()
    {
        $petcares = Petcare::all();
        return view('petcares.petcare_post', compact('petcares'));
    }
}
