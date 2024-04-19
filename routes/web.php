<?php

use App\Http\Controllers\API\FacultyController;
use App\Http\Controllers\API\PostController;
use App\Http\Middleware\SetLocale;
use App\Services\Localization\LocalizationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(
    [
        'prefix' => LocalizationService::locale(),
        'middleware' => SetLocale::class
    ], function(){
            Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

            Route::group(['prefix' => '/posts'], function (){
                Route::get('/', [PostController::class, 'index'])->name('post.index');
                Route::get('/create', [PostController::class, 'create'])->name('post.create');
                Route::post('/', [PostController::class, 'store'])->name('post.store');
                Route::get('/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
                Route::put('/', [PostController::class, 'update'])->name('post.update');
                Route::delete('/{post}', [PostController::class, 'destroy'])->name('post.destroy');
            });

            Route::group(['prefix' => '/faculty'], function (){
                Route::get('/', [FacultyController::class, 'index'])->name('faculty.index');
                Route::get('/create', [FacultyController::class, 'create'])->name('faculty.create');
                Route::post('/store', [FacultyController::class, 'store'])->name('faculty.store');
                Route::get('/{faculty}/edit', [FacultyController::class, 'edit'])->name('faculty.edit');
                Route::put('/{faculty}/update', [FacultyController::class, 'update'])->name('faculty.update');
                Route::delete('/{faculty}/delete', [FacultyController::class, 'destroy'])->name('faculty.delete');
            });
    });
