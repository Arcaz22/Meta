<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/outlet', function () {
    return view('outlet');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/reservasi', function () {
    return view('reservasi');
})->middleware(['auth', 'verified'])->name('reservasi');

Route::get('/cek-reservasi', function () {
    return view('cek-reservasi');
})->middleware(['auth', 'verified'])->name('cek-reservasi');

Route::get('/feedback', function () {
    return view('feedback');
})->middleware(['auth', 'verified'])->name('feedback');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

require __DIR__ . '/auth.php';
