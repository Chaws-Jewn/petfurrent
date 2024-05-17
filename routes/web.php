<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdoptController;
use App\Http\Controllers\AdoptStatusController;
use App\Http\Controllers\PetcareController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\AdminPetcareController;
use App\Http\Controllers\UserPetcareController;
use App\Http\Controllers\AboutHomeController;
use App\Http\Controllers\AdoptionHistoryController;
use App\Http\Controllers\InquiryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Routes for managing petcares
    Route::middleware('isAdmin')->group(function () {
        Route::get('/admin/petcares', [AdminPetcareController::class, 'index'])->name('admin.petcares.index');
        Route::get('/admin/petcares/create', [AdminPetcareController::class, 'create'])->name('admin.petcares.create');
        Route::post('/admin/petcares', [AdminPetcareController::class, 'store'])->name('admin.petcares.store');
        Route::get('/admin/petcares/{petcare}', [AdminPetcareController::class, 'show'])->name('admin.petcares.show');
        Route::get('/admin/petcares/{petcare}/edit', [AdminPetcareController::class, 'edit'])->name('admin.petcares.edit');
        Route::put('/admin/petcares/{petcare}', [AdminPetcareController::class, 'update'])->name('admin.petcares.update');
        Route::delete('/admin/petcares/{petcare}', [AdminPetcareController::class, 'destroy'])->name('admin.petcares.destroy');
    });

    Route::resource('admin/petcare', AdminPetcareController::class);

//Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('isAdmin'); // Add this if needed

Route::get('/admin/completed-orders', [DogController::class, 'completedAdoption'])->name('admin.completedAdoption')->middleware('isAdmin');

route::resource('admin', DogController::class)->middleware('isAdmin');
Route::put('/admin/{admin}', [DogController::class, 'update'])->name('admin.update');
Route::get('/admin/admin-home', [App\Http\Controllers\DogController::class, 'showAdopts'])->name('admin.admin-home')->middleware('isAdmin'); // ORIGINAL
Route::put('/admin/updateStatus/{adopt}', [DogController::class, 'updateStatus'])->name('admin.updateStatus');
Route::get('/admin/home', [AdminController::class, 'adminHome'])->name('admin.home');


Route::get('/admin/{dog}/edit', [DogController::class, 'edit'])->name('admin.edit')->middleware('isAdmin');
Route::put('/admin/{dog}/update', [DogController::class, 'update'])->name('admin.update')->middleware('isAdmin');
Route::delete('/admin/{id}', [DogController::class, 'destroy'])->name('admin.destroy');


// Route::resource('admin', AdoptController::class)->only(['update']);
//new
Route::put('/adopts/updateStatus/{adopt}', [AdoptController::class, 'updateStatus'])->name('adopts.updateStatus');


Route::get('/admin/adopt/{id}/details', [DogController::class, 'viewAdoptDetails'])->name('admin.adopt.details')->middleware('isAdmin');



Route::get('/user/home', [HomeController::class, 'index'])->name('home');
route::get('adopt/{dog}', [HomeController::class,'adoptForm'])->name('adopt.form');
route::post('place-adopt/{dog}', [HomeController::class,'placeAdopt'])->name('place.adopt');
Route::get('/customer/adopts', [DogController::class, 'userAdopts'])->name('customer.index');
Route::get('/user/dashboard', [HomeController::class, 'dashboard'])->name('home');
Route::get('/dog/{dog}/details', [HomeController::class, 'showDetails'])->name('details');


Route::resource('admin/petcare', AdminPetcareController::class);
Route::post('/admin/petcares', [AdminPetcareController::class, 'store'])->name('admin.petcares.store');
Route::get('/admin/petcares', [AdminPetcareController::class, 'index'])->name('admin.petcares.index');

Route::get('/petcares', [UserPetcareController::class, 'index'])->name('petcares.index');
Route::get('/admin/petcares', [AdminPetcareController::class, 'allPetcares'])->name('admin.petcares.index');
Route::get('/admin/petcares/all', [AdminPetcareController::class, 'allPetcares'])->name('admin.petcares.all');
Route::get('admin/petcares/{petcare}/edit', [AdminPetcareController::class, 'edit'])->name('admin.petcares.edit');
Route::put('admin/petcares/{petcare}', [AdminPetcareController::class, 'update'])->name('admin.petcares.update');

Route::get('/admin-home', [AdminController::class, 'adminHome']);
Route::get('/completed-orders', [AdminController::class, 'completedOrders']);
Route::get('/about-home', [AboutHomeController::class, 'index'])->name('about_home');
Route::get('/adoption-history', [AdoptionHistoryController::class, 'index'])->name('adoption_history');
// Route::get('/details', [DetailsController::class, 'yourMethod'])->name('details');
// Route::get('/previous-page', 'PreviousController@index')->name('previous.page');
//inqury
Route::get('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');
Route::post('/inquiry/store', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('/about-home', [AboutHomeController::class, 'index'])->name('about_home');


});

    // // Additional route for redirecting after petcare creation
    // Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    //     Route::resource('petcares', AdminPetcareController::class);
    //     return redirect()->route('admin.petcares.index')->with('success', 'Petcare added successfully.');
    // });
