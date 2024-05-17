<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function create()
    {
        return view('inquiry.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Inquiry::create([
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        return redirect()->route('inquiry.create')->with('success', 'Inquiry submitted successfully!');
    }
}