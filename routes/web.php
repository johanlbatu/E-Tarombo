<?php

use App\Http\Controllers\GenerasiController;
use App\Http\Controllers\PatamborLautController;

use App\Http\Controllers\TuanMarsantisController;
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

Route::get('/patambor-laut',[PatamborLautController::class,'index'])->name('patambor-laut');
Route::get('/tuan-marsanti',[TuanMarsantisController::class,'index'])->name('tuan-marsanti');
Route::get('/generasi',[GenerasiController::class,'index'])->name('generasi');

