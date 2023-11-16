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

//Module
    Route::get('/module', [ModuleController::class, 'index'])->name('module.index');
    Route::get('/module/{id}/edit', [ModuleController::class, 'edit'])->name('module.edit');
    Route::post('/module/{id}/edit', [ModuleController::class, 'update'])->name('module.update');
    Route::get('/module/{id}/delete', [ModuleController::class, 'delete'])->name('module.delete');
    Route::get('/module/new', [ModuleController::class, 'new'])->name('module.new');
    Route::post('/module/new', [ModuleController::class, 'create'])->name('module.create');

//Trein
    Route::get('/trein', 'TreinController@index')->name('trein.index');
    Route::get('/trein/{id}/edit', 'TreinController@edit')->name('trein.edit');
    Route::post('/trein/{id}/update', 'TreinController@update')->name('trein.update');
    Route::get('/trein/{id}/delete', 'TreinController@delete')->name('trein.delete');
    Route::get('/trein/new', 'TreinController@new')->name('trein.new');
    Route::post('/trein/create', 'TreinController@create')->name('trein.create');
});

