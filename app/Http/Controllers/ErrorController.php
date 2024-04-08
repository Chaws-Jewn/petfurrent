<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function display(string $error)
    {
        return view('error', ['error' => $error]);
    }
}
