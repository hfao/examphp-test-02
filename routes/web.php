<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\FilmController;
Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('filmcategory')->name('filmcategory.')->group(function () {
        Route::get('index', [FilmController::class, 'index'])->name('index');
        Route::get('create', [FilmController::class, 'create'])->name('create');
        Route::post('store', [FilmController::class, 'store'])->name('store');
        Route::get('edit/{id}', [FilmController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [FilmController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [FilmController::class, 'destroy'])->name('destroy');
    });
});
