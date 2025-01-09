<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MassageController;
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
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
})->name('home');
 
Route::get('price', [PakaianController::class, 'price'])->name('price');

Route::get('about', function () {
    return view('aboutus');
})->name('about');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('register', [LoginController::class, 'index2'])->name('register');
Route::post('register', [LoginController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('pakaian', [PakaianController::class, 'index'])->name('pakaian');
Route::get('pakaian/create', [PakaianController::class, 'create'])->name('pakaian.create');
Route::post('pakaian', [PakaianController::class, 'store'])->name('pakaian.store');
Route::delete('pakaian/{pakaian}', [PakaianController::class, 'destroy'])->name('pakaian.destroy');
Route::put('pakaian/{pakaian}', [PakaianController::class, 'update'])->name('pakaian.update');
Route::get('pakaian/{pakaian}/edit', [PakaianController::class, 'edit'])->name('pakaian.edit');


Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
Route::post('laporan', [LaporanController::class, 'generate'])->name('laporan.generate');

Route::get('massage', [MassageController::class, 'index'])->name('massage');
Route::post('massage', [MassageController::class, 'store'])->name('massage.store');
