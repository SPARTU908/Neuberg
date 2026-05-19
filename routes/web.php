<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ECGController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/appointment', [AppointmentController::class, 'index']);
Route::post('/appointment-book', [AppointmentController::class, 'store'])->name('appointment.store');
Route::get('/doctors-profile', [DoctorController::class, 'index']);
Route::get('/ecg', [ECGController::class, 'index']);
Route::get('/search', [SearchController::class, 'index']);
Route::get('/book-test/{test}', [BookingController::class, 'create'])->name('book.test');
Route::post('/book-test-submit', [BookingController::class, 'store'])->name('book.test.submit');

Route::get('/cart', [CartController::class, 'view'])->name('cart.view');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::post('/book-test-submit', [CartController::class, 'submit'])->name('book.test.submit');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
