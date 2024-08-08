<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KlienController;

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
    return view('welcome');
});



Route::get('/mahasiswa/register', [MahasiswaController::class, 'showRegisterForm'])->name('mahasiswa.register');
Route::post('/mahasiswa/register', [MahasiswaController::class, 'register'])->name('mahasiswa.register.submit');

Route::get('/klien/register', [KlienController::class, 'showRegisterForm'])->name('klien.register');
Route::post('/klien/register', [KlienController::class, 'register'])->name('klien.register.submit');

