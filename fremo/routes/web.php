<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DienstregelingController;
use App\Http\Controllers\WagenkaartController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\TreinController;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dienstregeling', [DienstregelingController::class, 'showDienstregeling'])->name('dienstregeling');
    Route::get('/wagenkaart', [WagenkaartController::class, 'showWagenkaart'])->name('wagenkaart');
    Route::get('/module', [ModuleController::class, 'showModule'])->name('module');
    Route::get('/trein', [TreinController::class, 'showTrein'])->name('trein');

});
