<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FasilitasController;
use App\http\Controllers\KamarController;
use App\http\Controllers\PemesananController;
use App\http\Controllers\FasilitasUmumController;
use App\http\Controllers\BuktiController;
use App\http\Controllers\HomeController;




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
Route::get('utama', function() {
    return view('landing');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('fasilitass', FasilitasController::class);
Route::resource('kamars', KamarController::class);
Route::resource('pemesanans', PemesananController::class);
Route::resource('fasilitasumums', FasilitasUmumController::class);
Route::resource('buktis', BuktiController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
