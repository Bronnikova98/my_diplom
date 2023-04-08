<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('editor',  [EditorController::class, 'index'])->name('editor');
Route::post('store', [EditorController::class, 'store'])->name('store');
Route::post('editor/image_upload', [EditorController::class, 'upload'])->name('upload');


