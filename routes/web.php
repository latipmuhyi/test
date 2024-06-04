<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelolaProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Login/login');
})->middleware('checkLogin');

Route::post('/register', [RegistrationController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['checkLogin'])->group(function () {
    Route::get('Home', [HomeController::class, 'index'])->name('home');
    Route::get('/Produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('/Pesanan', [KelolaProdukController::class, 'index'])->name('pesanan');
    Route::get('/Profil', [ProfilController::class, 'index'])->name('profil');
});

