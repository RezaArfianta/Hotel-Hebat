<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FasilitasController;
use App\http\Controllers\KamarController;
use App\http\Controllers\PemesananController;
use App\http\Controllers\FasilitasUmumController;
use App\http\Controllers\BuktiController;




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
    return view('landing');
});

Route::resource('fasilitass', FasilitasController::class);
Route::resource('kamars', KamarController::class);
Route::resource('pemesanans', PemesananController::class);
Route::resource('fasilitasumums', FasilitasUmumController::class);
Route::resource('buktis', BuktiController::class);

