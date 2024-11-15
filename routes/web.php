<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/willa', [PageController::class, 'villa'])->name('villa');
    Route::get('/galeria', [PageController::class, 'gallery'])->name('gallery');
    Route::get('/kontakt', [PageController::class, 'contact'])->name('contact');
    Route::post('/kontakt',[FormController::class,'contact_form'])->name('contact_form');
    Route::get('/polityka-prywatnosci', [PageController::class, 'privacyPolicy'])->name('privacyPolicy');
    Route::get('/regulamin', [PageController::class, 'regulations'])->name('regulations');

});
