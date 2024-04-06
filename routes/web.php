<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('user');
});

Route::get('/users', [UserController::class, 'fetchAll']);
Route::get('/user/{id}', [UserController::class, 'fetch']);
Route::delete('/users/delete', [UserController::class, 'delete'])->name('users.delete');