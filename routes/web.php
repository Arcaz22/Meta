<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservasiController;
use App\Models\Reservasi;
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

/*     Landing Page      */

Route::get('/', function () {
    return view('home.home');
});

Route::get('/fasilitas', function () {
    return view('home.fasilitas');
});

Route::get('/outlet', function () {
    return view('home.outlet');
});

Route::get('/testimoni', function () {
    return view('home.testimoni');
});
Route::get('/about', function () {
    return view('home.about');
});
/*     End Landing Page      */

/*      Admin Route      */
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'Index'])->name('login_from');
    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/cek-reservasi', [AdminController::class, 'cekReservasi'])->name('admin.cek-reservasi')->middleware('admin');
    // Route::get('/register', [AdminController::class, 'AdminRegister'])->name('admin.register');
    // Route::post('/register/create', [AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');
});
/*      END Admin Route      */

/*     User Route */
// Route::get('/reservasi', function () {
//     return view('reservasi');
// })->middleware(['auth', 'verified'])->name('reservasi');

Route::resource('/reservasi', ReservasiController::class)->middleware(['auth', 'verified']);

Route::get('/cek-reservasi', function () {
    return view('.user.cek-reservasi', [
        'reservasis' => Reservasi::all()
    ]);
})->middleware(['auth', 'verified'])->name('cek-reservasi');

Route::get('/feedback', function () {
    return view('.user.feedback');
})->middleware(['auth', 'verified'])->name('feedback');
/*     End User Route */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*     Login Google */
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
/*     EndLogin Google */

require __DIR__ . '/auth.php';
