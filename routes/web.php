<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
})->name('welcome');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('hitung', function () {
    return view('hitung');
})->name('hitung');

Route::get('berhasil_hitung', function () {
    return view('berhasil_hitung');
})->name('berhasil_hitung');

//socialite route
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';