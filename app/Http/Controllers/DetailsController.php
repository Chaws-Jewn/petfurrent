<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function yourMethod()
    { 
        // Your logic for handling the /details route goes here
        return view('details'); // You may replace 'your_view' with the actual view name
    }
}
