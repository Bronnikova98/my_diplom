<?php
use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Route;

// Маршруты администратора

//После реализации страниц в кабинете пользователя добавить middleware('auth')
// Route::prefix('admin')->middleware('auth', 'active', 'admin')->group(function () {

Route::prefix('admin')->group(function () {
    // Главная страница админ.панели
    Route::get('/',)->name('admin');


    Route::get('news', [NewsController::class, 'index'])->name('admin.news');
    Route::get('news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('news/upload', [NewsController::class, 'upload'])->name('admin.news.upload');
    Route::post('news', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('news/{post}', [NewsController::class, 'show'])->name('admin.news.show');
    Route::get('news/{post}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('news/{post}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('news/{post}', [NewsController::class, 'delete'])->name('admin.news.delete');
});