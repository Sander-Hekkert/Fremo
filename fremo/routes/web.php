<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DienstregelingController;
use App\Http\Controllers\WagenkaartController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\TreinController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WegdiagramController;
use App\Http\Controllers\TijddiagramController;
use App\Http\Controllers\TijdtafelController;
use App\Http\Controllers\VrachtkaartController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProjecteditController;
use App\Http\Controllers\WegdiagrameditController;
use App\Http\Controllers\TijddiagrameditController;

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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
    Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
    Route::post('/projects', [ProjectController::class, 'store'])->name('project.store');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
//Wegdiagram
    Route::get('/wegdiagram/create/{project_id}', [WegdiagramController::class, 'create'])->name('wegdiagram.create');
    Route::post('/wegdiagram/store', [WegdiagramController::class, 'store'])->name('wegdiagram.store');
    Route::get('/wegdiagram/storeModule', [WegdiagramController::class, 'storeModule'])->name('wegdiagram.storeModule');

//Dienstregeling
    Route::get('/dienstregeling', [DienstregelingController::class, 'index'])->name('dienstregeling');
    Route::get('/dienstregeling/{id}/edit', [DienstregelingController::class, 'edit'])->name('dienstregeling.edit');
    Route::get('/dienstregeling/{id}/delete', [DienstregelingController::class, 'delete'])->name('dienstregeling.delete');


//Edit Project
    Route::get('/editprojecttitle/{id}', [ProjecteditController::class, 'title'])->name('projectedit.title');
    Route::post('/project/update/{id}', [ProjecteditController::class, 'update'])->name('project.update');

//Edit Wegdiagram
    Route::get('/editwegdiagram/{id}', [WegdiagrameditController::class, 'title'])->name('wegdiagram.edit');
    Route::post('/wegdiagram/update/{id}', [WegdiagrameditController::class, 'update'])->name('wegdiagram.update');

//Edit Tijddiagram
    Route::get('/edittijddiagram/{id}', [TijddiagrameditController::class, 'title'])->name('tijddiagram.edit');
    Route::post('/tijddiagram/update/{id}', [TijddiagrameditController::class, 'update'])->name('tijddiagram.update');

//Tijddiagram
    Route::get('/tijddiagram/{project_id}', [TijddiagramController::class, 'index'])->name('tijddiagram.index');

//Profiles
    Route::get('/profile', [ProfilesController::class, 'show'])->name('profiles.show');
    Route::get('/profile/edit', [ProfilesController::class, 'edit'])->name('profiles.edit');
    Route::put('/profile/update', [ProfilesController::class, 'update'])->name('profiles.update');
    Route::delete('/profile/destroy', [ProfilesController::class, 'destroy'])->name('profiles.destroy');
    Route::get('/profile/index', [ProfilesController::class, 'index'])->name('profiles.index');

//Users
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::post('/change-role/{id}', [UsersController::class, 'changeRole'])->name('changeRole');
    Route::get('/edit-user/{id}', [UsersController::class, 'editUser'])->name('editUser');
    Route::delete('/delete-user/{id}', [UsersController::class, 'deleteUser'])->name('deleteUser');
    Route::post('/update-user/{id}', [UsersController::class, 'updateUser'])->name('updateUser');

//Wagenkaart
Route::post('wagenkaart', [WagenkaartController::class, 'store'])->name('wagenkaart.store');

//Pdf
    Route::get('/download-pdf-wegdiagram/{project_id}', 'WegdiagramController@downloadPDF')->name('wegdiagram.downloadPDF');
});
