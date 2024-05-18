<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adopt;

class AdoptionHistoryController extends Controller
{
    public function index()
    {   
          // Retrieve the adoption history for the authenticated user
        $adoptions = Adopt::with('dog')->where('user_id', auth()->id())->get();
        return view('adoption_history', compact('adoptions'));
    }
}
