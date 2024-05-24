<?php

namespace App\Http\Controllers;

use App\Models\Petcare;
use Illuminate\Http\Request;


class AdminPetcareController extends Controller
{
    public function index()
    {
        $petcares = Petcare::all();
        return view('admin.admin-home', compact('petcares'));
    }

    public function create()
    {
        return view('admin.petcare_create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Petcare::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.home')->with('success', 'Petcare added successfully.');
    }

    public function edit(Petcare $petcare)
    {
        return view('admin.petcare_edit', compact('petcare'));
    }
    

    // public function update(Request $request, Petcare $petcare)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $imageName = time() . '.' . $request->image->extension();
    //         $request->image->move(public_path('images'), $imageName);
    //         $petcare->update(['image' => $imageName]);
    //     }

    //     $petcare->update([
    //         'title' => $request->title,
    //         'description' => $request->description,
    //     ]);
    //     // Fix the route name in the redirect
    //     return redirect()->route('admin.petcares.index')->with('success', 'Petcare updated successfully.');
    // }

    public function update(Request $request, Petcare $petcare)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'new_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('new_image')) {
            $imageName = time() . '.' . $request->new_image->extension();
            $request->new_image->move(public_path('images'), $imageName);
            // Update the image field in the database
            $petcare->update(['image' => $imageName]);
        }
    
        $petcare->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
    
        return redirect()->route('admin.petcares.index')->with('success', 'Petcare updated successfully.');
    }
    


    public function destroy(Petcare $petcare)
    {
        $petcare->delete();
        // Fix the route name in the redirect
        return redirect()->route('admin.petcares.index')->with('success', 'Petcare deleted successfully.');
    }

    public function show(Petcare $petcare)
    {
        // Your logic for showing a specific petcare
        return view('admin.petcare.show', compact('petcare'));
    }
    // public function allPetcares()
    // {
    // $petcares = Petcare::all();
    // return view('petcares.all_petcare', compact('petcares'));

    // }
    public function allPetcares()
{
    $petcares = Petcare::all();
    return view('admin.all_petcare', compact('petcares'));
}
}
