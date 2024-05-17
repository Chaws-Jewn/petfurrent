<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutHomeController extends Controller
{
    public function index()
    {
        return view('about_home'); // Change 'about_home' to your actual view name
    }
}
