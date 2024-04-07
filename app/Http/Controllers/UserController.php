<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function fetchAll() {
        $users = User::all();

        return $users;
    }

    public function fetch(int $id) {
        $user = User::findOrFail($id);

        return $user;
    }

    public function add(Request $request) {
        // add function
    }

    public function update(Request $request, int $id) {
        // update function
    }

    public function delete(Request $request) {
        $user = User::findOrFail($request->id);

        $user->delete();
        return response()->json(['Status' => 'User Deleted'], 200);
    }
}
