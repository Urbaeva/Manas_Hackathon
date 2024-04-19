<?php

use App\Services\Localization\LocalizationService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(
    [
        'prefix' => LocalizationService::locale(),
        'middleware' => \App\Http\Middleware\SetLocale::class
    ], function(){
            Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });
