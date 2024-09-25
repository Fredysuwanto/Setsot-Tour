<?php

use App\Http\Controllers\HalamandetailController;
use App\Http\Controllers\HalamanreviewController;
use App\Http\Controllers\halamanutamaController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SelengkapnyaController;
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
    return view('halamanutama.index');
});
Route::resource('halamanutama', halamanutamaController::class);
Route::resource('registrasi', RegistrasiController::class);
Route::resource('halamandetail',HalamandetailController::class);
Route::resource('halamanreview',HalamanreviewController::class);


