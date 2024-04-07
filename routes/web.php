<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('user');
});

// User Routes
Route::get('/users', [UserController::class, 'fetchAll'])->name('users.fetchAll');
Route::get('/user/{id}', [UserController::class, 'fetch'])->name('users.fetch');
Route::get('/users/add', [UserController::class, 'add'])->name('users.add');
Route::get('/users/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/delete', [UserController::class, 'delete'])->name('users.delete');