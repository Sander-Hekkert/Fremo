<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DienstregelingController;
use App\Http\Controllers\WagenkaartController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\TreinController;
use App\Http\Controllers\ProjectController;


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
    Route::get('/modules/{module}/edit', [ModuleController::class, 'edit'])->name('module.edit');
    Route::post('/modules/{module}/edit', [ModuleController::class, 'update'])->name('module.update');
    Route::get('/modules/{module}/delete', [ModuleController::class, 'delete'])->name('module.delete');
    Route::get('/module/new', [ModuleController::class, 'new'])->name('module.new');
    Route::post('/module/create', [ModuleController::class, 'create'])->name('module.create');
    Route::resource('/module', ModuleController::class)->names('module')->parameters(['module' => 'module']);

//Trein
    Route::get('/trein', [TreinController::class, 'index'])->name('trein.index');
    Route::get('/treins/{trein}/edit', [TreinController::class, 'edit'])->name('trein.edit');
    Route::post('/treins/{trein}/update', [TreinController::class,'update'])->name('trein.update');
    Route::delete('treins/{trein}', [TreinController::class, 'destroy'])->name('trein.destroy');
    Route::get('/trein/new', [TreinController::class, 'new'])->name('trein.new');
    Route::post('/trein/create', [TreinController::class, 'create'])->name('trein.create');
    Route::resource('/trein', TreinController::class)->names('trein')->parameters(['trein' => 'trein']);

//Project
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
});