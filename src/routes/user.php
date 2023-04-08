<?php

use Illuminate\Support\Facades\Route;

// Маршруты аутентифицированного пользователя

//После реализации страниц в кабинете пользователя добавить middleware('auth')
// Route::prefix('user')->middleware('auth', 'active')->group(function () {


Route::prefix('user')->group(function () {
    Route::redirect('/', '/user/visits')->name('user');


});