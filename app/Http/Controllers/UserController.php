<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function fetchAll() {
        $users = User::all();
        if ($users->isEmpty()) {
        return view('user', ['users' => $users]);
    }
    return view('user', ['users' => $users]);
}
    public function fetch(int $id) {
        $user = User::findOrFail($id);

        return $user;
    }

    public function add(Request $request) {
        $model = new User();

        $model->fill($request->all());
        $model->save();

        return view('user', ['users' => User::all()]);
    }

    public function update(Request $request) {
        
        $model = User::findOrFail($request->id);

        $model->fill($request->all());
        $model->save();
        
        return view('user', ['users' => User::all()]);
    }

    public function delete(Request $request) {
        $user = User::findOrFail($request->id);

        $user->delete();
        return view('user', ['users' => User::all()]);
    }
}
