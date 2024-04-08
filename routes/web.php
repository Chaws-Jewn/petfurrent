<?php

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\AdoptionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('user');
});

// Error Routes
Route::get('/error', [ErrorController::class, 'display'])->name('error');

// User Routes
Route::get('/users', [UserController::class, 'fetchAll'])->name('users.fetchAll');
Route::get('/user/{id}', [UserController::class, 'fetch'])->name('users.fetch');
Route::post('/users/add', [UserController::class, 'add'])->name('users.add');
Route::put('/users/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/delete', [UserController::class, 'delete'])->name('users.delete');

// Pet Routes
Route::get('/pets', [PetController::class, 'fetchAll'])->name('pets.fetchAll');
Route::get('/pet/{id}', [UserController::class, 'fetch'])->name('pets.fetch');
Route::post('/pets/add', [UserController::class, 'add'])->name('pets.add');
Route::put('/pets/update', [UserController::class, 'update'])->name('pets.update');
Route::delete('/pets/delete', [UserController::class, 'delete'])->name('pets.delete');

// Adoption Routes
Route::get('/adoptions', [AdoptionController::class, 'fetchAll'])->name('adoptions.fetchAll');
Route::get('/adoption/{id}', [AdoptionController::class, 'fetch'])->name('adoptions.fetch');
Route::post('/adoptions/add', [AdoptionController::class, 'add'])->name('adoptions.add');
Route::patch('/adoptions/update', [AdoptionController::class, 'update'])->name('adoptions.update');
Route::delete('/adoptions/delete', [AdoptionController::class, 'delete'])->name('adoptions.delete');