<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Models\Adopt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DogController extends Controller
{
    
    public function index()
    {
        $adopts = Adopt::all(); // This retrieves all the adopt records (stored in adopts table) with the Adopt model
        return view('admin.admin-home')->with('adopts', $adopts); // The retrieved records will be passed to the admin-home (admin dashboard)
    }

    public function create()
    {
        return view('admin.dog'); // Return the dog blade file for adding/posting new dogs
    }

    public function adminDashboard()
    {
        $adopts = Adopt::with('user')->get();
        return view('admin.admin-home', compact('adopts'));
    }

    /********************* ADDING/POSTING DOG  ************************/
    public function store(Request $request)
    {
        // This part will validate the incoming request data or informations of the dogs added using the Laravel validation system
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'breed' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('dog'), $imageName); // This moves the uploaded image of the dog to the 'public/dog' folder

        // This creates new dog record or added the information of the posted dog to the database.
        Dog::create([
            'name' => $request->name,
            'age' => $request->age,
            'breed' => $request->breed,
            'gender' => $request->gender,
            'description' => $request->description,
            'image' => $imageName,]);

        // Once we click the button, this redirects to the admin dashboard with a name of 'index'
        return redirect()->route('admin.show', ['admin' => 'all_dogs'])->with('success', 'Dog updated successfully');

    }

    /********************* UPDATING DOG DETAILS  ************************/
    public function edit($id)
    {
        $dog = Dog::findOrFail($id); //This finds a specific dog record based on its ID.
        return view('admin.update-dog', compact('dog')); // This passes the dog record found to the form for updating (update-dog) to edit/update the details
    }

    public function update(Request $request, $id)
    {
        // This validates the incoming request data
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'breed' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $dog = Dog::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('dog'), $imageName);
            $dog->image = $imageName;
        }
        // This updates the existing information of the dog
        $dog->update([
            'name' => $request->name,
            'age' => $request->age,
            'breed' => $request->breed,
            'gender' => $request->gender,
            'description' => $request->description,
        ]);
        // Redirects to the admin dashboard (index) after updating 
        return redirect()->route('admin.show', ['admin' => 'all_dogs'])->with('success', 'Dog updated successfully');
    }

    public function destroy($id)
    {
        $dog = Dog::findOrFail($id);

        Storage::delete('dog/' . $dog->image);
        $dog->delete();

        return redirect()->route('admin.index')->with('success', 'Dog deleted successfully');
    }

    public function show()
    {
        $dogs = Dog::with('adopts')->orderByDesc('updated_at')->get(); // This retrieves all the dog records on the dogs table from the database
        // $dogs = [];
        // foreach($all_dogs as $dog) {
        //     if($dog->adopts!= null) {
        //         array_push($dogs, $dog);
        //     }
        // }
        return view('admin.show-dog', compact('dogs')); // This passes the retrieved information of the dogs to the show-dog blade file to list all the added/posted dogs
    }

    /********************* UPDATING ADOPTION STATUS  ************************/

    public function updateStatus(Request $request, Adopt $adopt)
    {
        // This validates the incoming request for the 'adopt_status' field
        $request->validate([
            'adopt_status' => 'required|in:Pending,Processing,Completed',
        ]);

        $previousStatus = $adopt->adopt_status; // This only stores the previous status of the adoption

        $adopt->update(['adopt_status' => $request->input('adopt_status')]); // This updates the adoption status of the given adoption with the new status updated by the admin

        // This checks if the updated status is 'completed'
        if ($request->input('adopt_status') === 'Completed') {
            try {
                $dog = $adopt->dog; // This retrieves the corresponding dog for the adopt record

                // If a dog corresponds with the adopt record
                if ($dog) {
                    Storage::delete('dog/' . $dog->image); // Delete the dog image from the storage (public directory)
                    $dog->delete();                        // Delete the record of the associated dog from the database

                    // Redirect to the 'completedAdoption' route
                    return redirect()->route('admin.completedAdoption')->with('success', 'Status updated successfully, and dog deleted.');
                }
                    // If there is no associated dog
                return redirect()->route('admin.index')->with('error', 'Cannot delete the dog. It does not exist or has no associated adoption records.');
            
            } catch (QueryException $e) {
                if ($e->getCode() == 1451) {
                    Log::error($e);
                    return redirect()->route('admin.index')->with('error', 'Cannot delete the dog. It has associated adoption records.');
                }
                Log::error($e);

                return redirect()->route('admin.index')->with('error', 'An error occurred while updating the status and deleting the dog.');
            }
        }
        // If the updated/new status is not 'Completed', redirect to the 'admin.index' (admin dashboard)
        return redirect()->route('admin.index')->with('success', 'Status updated successfully.');
    }

    /********************* COLORS ON THE STATUS. THE COLOR DEPENDS ON THE STATUS  ***********************
                    We use switch statement to check the status in the $adopt_status
    ******************************************************************************************************/
    public function getStatusColor($adopt_status)
    {
        switch ($adopt_status) {
            // If the status is pending (default), the color on the dropdown returns 'orange'
            case 'Pending':
                return 'orange';
            // If the adopt_status is Processing (changed by the admin), the color on the dropdown returns 'blue'
            case 'Processing':
                return 'blue';
            // If the adopt_status is Completed (changed by the admin), the color on the dropdown returns 'green'
            case 'Completed':
                return 'green';
            default:
                return 'black';
        }
    }

    public function showAdopts()
    {
        $adopts = Adopt::all();
        return view('admin.admin-home', compact('adopts'));
    }


    /********************* LIST OF COMPLETED ADOPTIONS  ************************/
    public function completedAdoption()
    {
        $completedOrders = Adopt::where('adopt_status', 'Completed')->get(); // This retrieves the adopt records that the status is already 'Completed' 

        return view('admin.completed-orders', compact('completedOrders')); // This passes the retrieved completed adoption to the 'admin.completed-orders'
    }

    /********************* ADOPTION STATUS (USER PAGE)  ************************/
    public function userAdopts()
    {
        $userAdopts = Auth::user()->adopts()->latest('created_at')->first(); // This retrieves the latest adopt record for the autenthicated user/customer

        return view('customer.index', compact('userAdopts')); // Passes the retrieved adopt record to the 'customer.index' (customer adoption status)
    }

    /********************* VIEWING OF ADOPTION DETAILS  ************************/
    public function viewAdoptDetails($id)
    {
        // This retrieves a specific adopt record with the corresponding user and dog information/details
        $adopt = Adopt::with(['user', 'dog'])->findOrFail($id);

        // This passes the retrieved adopt record to the adopt_details page.
        return view('admin.adopt_details', ['adopt' => $adopt]);
    }


    public function markDogAsSold($dogId)
    {
        $dog = Dog::find($dogId);   // This finds the dog record based on the dogId

        // This checks if there is a dog record
        if ($dog) {
            // This perform a soft delete on the dog record if the status is completed. This removes the dogs to the user dashboard so it won't be available to other users 
            // $dog->delete();
            
            // Redirect to the 'admin.index' (admin dashboard)
            return redirect()->route('admin.index');
        } else {
            // Redirect to the 'admin.index' (admin dashboard)
            return redirect()->route('admin.index');
        }
    }
}


