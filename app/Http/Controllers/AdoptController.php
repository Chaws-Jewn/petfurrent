<?php

namespace App\Http\Controllers;

use App\Models\Adopt;
use Illuminate\Http\Request;

class AdoptController extends Controller
{
    //

    // public function index()
    // {
    //     // Fetch completed orders with associated dogs using eager loading
    //     $completedOrders = Adopt::with('dog')->where('adopt_status', 'Completed')->get();


    //     return view('admin.admin-home', compact('completedOrders'));
    // }
//new
//     public function updateStatus(Request $request, Adopt $adopt)
// {
//     $adopt->update(['adopt_status' => 'Completed']);

//     return redirect()->route('admin.admin-home')->with('success', 'Adoption marked as Completed!');
// }

public function updateStatus(Request $request, Adopt $adopt)
{
    $request->validate([
        'status' => 'required|in:Processing,Completed',
    ]);

    $adopt->update(['adopt_status' => $request->input('status')]);

    return redirect()->route('admin.admin-home')->with('success', 'Adoption status updated successfully!');
}

public function declineStatus(Request $request, Adopt $adopt)
{
    $request->validate([
        'status' => 'required|in:Processing,Completed,Declined',
    ]);

    $adopt->update(['adopt_status' => $request->input('status')]);

    return redirect()->route('admin.admin-home')->with('success', 'Adoption status updated successfully!');
}

/*
    public function updateStatus(Request $request, Adopt $adopt)
    {
        $request->validate([
            'adopt_status' => 'required|in:Pending,On Process,Completed',
        ]);

        $adopt->update(['adopt_status' => $request->input('adopt_status')]);

        return redirect()->route('admin.admin-home', ['adopt' => $adopt])
        ->with('success', 'Status updated successfully!');    }

        */
        /*
        public function updateStatus(Request $request, Adopt $adopt)
        {
            $request->validate([
                'status' => 'required|in:Pending,Processing,Completed',
            ]);
    
            $adopt->update(['status' => $request->input('status')]);
    
            return redirect()->route('admin.admin-home')->with('success', 'Status updated successfully!');
        }
        */
        
}
