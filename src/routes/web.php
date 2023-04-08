<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;


Route::get('editor',  [EditorController::class, 'index'])->name('editor');
Route::post('store', [EditorController::class, 'store'])->name('store');
Route::post('editor/image_upload', [EditorController::class, 'upload'])->name('upload');


/*
Маршруты для незарегистрированных пользователей
*/

Route::view('/', 'home.index')->name('home');
Route::redirect('/home', '/')->name('home.redirect');
Route::view('/about', 'home.about')->name('about');
Route::view('/contacts', 'home.contacts')->name('contacts');
Route::view('/services', 'home.services')->name('services');
Route::view('/patients', 'home.patients')->name('patients');
Route::view('/specialists', 'home.specialists')->name('specialists');

Route::middleware('guest')->group(function(){

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
});

// BlogController
Route::get('news', [NewsController::class, 'index'])->name('news');
Route::get('news/{post}', [NewsController::class, 'show'])->name('news.show');