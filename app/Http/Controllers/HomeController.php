<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Models\Adopt;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $dogs = Dog::where('adopted', false);   
        return view('home', compact('dogs')); // Return the 'home' view (user dashboard) and passing the retrieved dog records
    }


    public function home()
    {
        $dogs = Dog::where('adopted', false); 
        return view('home', compact('dogs'));
    }

    /*********************Adoption Form  ************************/
    public function adoptForm(Dog $dog)
    {
        return view('adopt', compact('dog'));
    }

    /*
    public function placeAdopt(Request $request, Dog $dog)
    {
        $request -> validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number'=> 'required|string|max:11',
            'email_address' => 'required|string',
            'house_number'=> 'required|string',
            'street' => 'required|string',
            'city'=> 'required|string',
            'adopt_status' => 'Pending',
        ]);

        $adopt = new Adopt([
            'user_id'=> auth()-> user()-> id,
            'dogs_id' => $dog->id,
            'first_name' =>$request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone_number'=> $request->input('phone_number'),
            'email_address'=> $request->input('email_address'),
            'house_number'=> $request->input('house_number'),
            'street'=> $request->input('street'),
            'city'=> $request->input('city'),
            'adopt_status' => 'Pending',
        ]);

        $adopt->save();
        return redirect()->route('home', ['dog' => $dog])->with('success', 'Adoption placed successfully!');

    }
    */

    /********************* PLACING ADOPTION  ************************/
    public function placeAdopt(Request $request, Dog $dog)
    {
        try {
            // This validate the incoming request data in the adoption form
            $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'phone_number' => 'required|string|max:11',
                'email_address' => 'required|string',
                'house_number' => 'required|string',
                'street' => 'required|string',
                'city' => 'required|string',
                'adopt_status' => 'Pending',
            ]);

            // Create a new Adopt model with the provided details
            $adopt = new Adopt([
                'user_id' => auth()->user()->id,
                'dogs_id' => $dog->id,
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'phone_number' => $request->input('phone_number'),
                'email_address' => $request->input('email_address'),
                'house_number' => $request->input('house_number'),
                'street' => $request->input('street'),
                'city' => $request->input('city'),
                'adopt_status' => 'Pending',
            ]);

            // Saves the new adopt record to the adopt table
            $adopt->save();

            // Redirect to the 'home' route (user dashboard)
            return redirect()->route('home', ['dog' => $dog])->with('success', 'Adoption placed successfully!');
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }


    public function adopts()
    {
        $user = auth()->user(); // This retrieves the current authenticated user
        $adopts = Adopt::with('adoptStatuses')->where('user_id', $user->id)->get(); // This retrieve the adopt records with its corresponding adopt statuses for the current authenticated user

        return view('adopt-statuses.index', compact('adopts'));
    }

    public function dashboard()
    {
        $dogs = Dog::where('adopted', false)->get();  // This retrieve all dog records where 'deleted_at' is null

        return view('home', compact('dogs'));
    }
        // Displaying details
        public function showDetails(Dog $dog)
        {
            return view('details', compact('dog'));
        }
}
