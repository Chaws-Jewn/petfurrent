<?php

namespace App\Http\Controllers;

use App\Models\AdoptStatus;
use Illuminate\Http\Request;

class AdoptStatusController extends Controller
{
    //
    /*
    public function index()
    {
        $user = auth()->user(); // Assuming you are using authentication
        $adoptStatuses = AdoptStatus::where('user_id', $user->id)->get();

        return view('adopt_statuses.index', compact('adoptStatuses'));
    }
    
    public function index()
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            $user = auth()->user();
            $adoptStatuses = AdoptStatus::where('user_id', $user->id)->get();

            return view('adopt_statuses.index', compact('adoptStatuses'));
        }

        // Redirect to login or handle unauthenticated user
        return redirect()->route('login');
    }
    
    public function index()
    {
        $user = auth()->user();
        dd($user);  // Check if the user is correctly authenticated
    
        $adoptStatuses = AdoptStatus::where('user_id', $user->id)->get();
        dd($adoptStatuses);  // Check if the adopt statuses are retrieved correctly
    
        return view('adopt_statuses.index', compact('adoptStatuses'));
    }
    */

    /*
    public function index()
    {
        $user = auth()->user();
        $adoptStatuses = AdoptStatus::where('user_id', $user->id)->with('adopt.dog')->get();

        return view('adopt_statuses.index', compact('adoptStatuses'));
    }
    */
}
