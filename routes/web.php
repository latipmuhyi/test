<?php

use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelolaProdukController;
use App\Http\Controllers\KosultasiController;
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
    return view('Home');
})->middleware('checkLogin');

Route::post('/register', [RegistrationController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/loginUser', [LoginController::class, 'index'])->name('loginUser');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/Produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/Pesanan', [KosultasiController::class, 'index'])->name('pesanan');


Route::middleware(['checkLogin'])->group(function () {
    Route::get('Home', [HomeController::class, 'index'])->name('home');
    Route::get('/KelolaProduk', [KelolaProdukController::class, 'index'])->name('kelolaProduk');
    Route::get('/Profil', [ProfilController::class, 'index'])->name('profil');

});

