<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\WifiAuthController;
use App\Http\Controllers\AuthGuestController;
use App\Models\Guest;
Route::get('/conditions', function () {
    return view('conditions');
})->name('conditions');


Route::get('/dashboard', function () {
    $totalGuests = Guest::count(); // Nombre total d'invités
    return view('dashboard', ['totalGuests' => $totalGuests]); // <-- plus de dossier wifi
})->middleware(['auth'])->name('dashboard');


//Route::get('/dashboard', function () {
    //return view('dashboard');
//})->name('dashboard');


Route::get('/guest-login', [AuthGuestController::class, 'showLoginForm'])->name('guest.login');
Route::post('/guest-login', [AuthGuestController::class, 'login'])->name('guest.login.submit');


Route::prefix('wifi')->group(function () {
    Route::get('/register', [WifiAuthController::class, 'showRegistrationForm'])
         ->name('wifi.register');
         
    Route::post('/register', [WifiAuthController::class, 'register'])
         ->name('wifi.register.submit');
         
    Route::get('/registration-success', [WifiAuthController::class, 'registrationSuccess'])
         ->name('wifi.registration.success');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('guests', GuestController::class)->except(['create', 'store', 'show']);
});



Route::get('/', function () {
    return view('welcome');
});
Route::get('/wifi-guest', function () {
    return view('wifi-guest');
});


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
    //return view('dashboard');
  // })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
