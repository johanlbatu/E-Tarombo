<?php

use App\Http\Controllers\GenerasiController;
use App\Http\Controllers\PatamborLautController;

use App\Http\Controllers\TuanMarsantiController;
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
Route::get('/tambahpl',[PatamborLautController::class,'create'])->name('tambahpl');
Route::post('/insertpl',[PatamborLautController::class,'insert'])->name('insertpl');

Route::get('/tuan-marsanti',[TuanMarsantiController::class,'index'])->name('tuan-marsanti');
Route::get('/createtm',[TuanMarsantiController::class,'create'])->name('createtm');
Route::post('/inserttm',[TuanMarsantiController::class,'insert'])->name('inserttm');

Route::get('/generasi',[GenerasiController::class,'index'])->name('generasi');
Route::get('/creategn',[GenerasiController::class,'create'])->name('creategn');
Route::post('/insertgn',[GenerasiController::class,'insert'])->name('insertgn');

