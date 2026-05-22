<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ECGController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/appointment', [AppointmentController::class, 'index']);
Route::post('/appointment-book', [AppointmentController::class, 'store']);

Route::get('/doctors-profile', [DoctorController::class, 'index']);

Route::get('/ecg', [ECGController::class, 'index']);

Route::get('/search', [SearchController::class, 'index']);

Route::get('/book-test/{test}', [BookingController::class, 'create']);
Route::post('/book-test-submit', [BookingController::class, 'store']);

/*
|--------------------------------------------------------------------------
| Cart Routes
|--------------------------------------------------------------------------
*/

Route::get('/cart', [CartController::class, 'view'])->name('cart.view');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::post('/cart-submit', [CartController::class, 'submit'])
    ->name('cart.submit');
Route::post('/cart/remove-single', [CartController::class, 'removeSingle'])
    ->name('cart.remove.single');

    Route::post('/cart/update-qty', [CartController::class, 'updateQty'])
    ->name('cart.update.qty');

/*
|--------------------------------------------------------------------------
| Authenticated Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

        Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

});

});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';