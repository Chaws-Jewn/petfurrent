<?php

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdoptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function() {
    return view('user');
});

// Route for the home page
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Error Routes
Route::get('/error', [ErrorController::class, 'display'])->name('error');

// User Routes
Route::get('/users', [UserController::class, 'fetchAll'])->name('users.fetchAll');
Route::get('/user/{id}', [UserController::class, 'fetch'])->name('users.fetch');
Route::post('/users/add', [UserController::class, 'add'])->name('users.add');
Route::put('/users/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/delete', [UserController::class, 'delete'])->name('users.delete');


// Adoption Routes
Route::get('/adoptions', [AdoptionController::class, 'fetchAll'])->name('adoptions.fetchAll');
Route::get('/adoption/{id}', [AdoptionController::class, 'fetch'])->name('adoptions.fetch');
Route::post('/adoptions/add', [AdoptionController::class, 'add'])->name('adoptions.add');
Route::patch('/adoptions/update', [AdoptionController::class, 'update'])->name('adoptions.update');
Route::delete('/adoptions/delete', [AdoptionController::class, 'delete'])->name('adoptions.delete');