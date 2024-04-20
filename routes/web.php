<?php

use App\Http\Controllers\API\ApplicationController;
use App\Http\Controllers\API\DocumentController;
use App\Http\Controllers\API\ExamController;
use App\Http\Controllers\API\FacultyController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\UserController;
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
        'middleware' => [SetLocale::class, 'auth']
    ], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => '/posts'], function () {
        Route::get('/', [PostController::class, 'index'])->name('post.index');
        Route::get('/show/{post}', [PostController::class, 'show'])->name('post.show');
        Route::get('/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/', [PostController::class, 'store'])->name('post.store');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
        Route::put('/', [PostController::class, 'update'])->name('post.update');
        Route::delete('/{post}', [PostController::class, 'destroy'])->name('post.destroy');

        Route::post('/addCommission/{post}', [PostController::class, 'addCommission'])->name('post.addCommission');
        Route::post('/addDocument/{post}', [PostController::class, 'addDocument'])->name('post.addDocument');
    });


    Route::group(['prefix' => '/faculty'], function () {
        Route::get('/', [FacultyController::class, 'index'])->name('faculty.index');
        Route::get('/create', [FacultyController::class, 'create'])->name('faculty.create');
        Route::post('/store', [FacultyController::class, 'store'])->name('faculty.store');
        Route::get('/{faculty}/edit', [FacultyController::class, 'edit'])->name('faculty.edit');
        Route::put('/{faculty}/update', [FacultyController::class, 'update'])->name('faculty.update');
        Route::delete('/{faculty}/delete', [FacultyController::class, 'destroy'])->name('faculty.delete');
    });

    Route::group(['prefix' => 'document'], function () {
        Route::get('/', [DocumentController::class, 'index'])->name('document.index');
        Route::get('/create', [DocumentController::class, 'create'])->name('document.create');
        Route::post('/', [DocumentController::class, 'store'])->name('document.store');
    });

    Route::group(['prefix' => 'applicant'], function () {
        Route::get('/', [UserController::class, 'index'])->name('applicant.index');
        Route::get('/apply/{post}', [UserController::class, 'applyForm'])->name('applicant.apply');
        Route::post('/apply/store/{post}', [UserController::class, 'apply'])->name('applicant.apply.store');
        Route::get('/tasks', [UserController::class, 'task'])->name('applicant.task');
        Route::post('/tasks/upload/{upload}', [UserController::class, 'uploadDoc'])->name('applicant.task.uploadDoc');

        Route::get('/profile', [UserController::class, 'profile'])->name('applicant.profile');
        Route::get('/edit/{user}', [UserController::class, 'editProfile'])->name('applicant.edit');
    });

    Route::group(['prefix' => 'application'], function () {
        Route::get('/', [ApplicationController::class, 'index'])->name('application.index');
    });

    Route::group(['prefix' => '/exam'], function () {
        Route::post('/', [ExamController::class, 'create'])->name('exam.create');
    });
});
