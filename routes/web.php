<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlantenController;

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

Route::get('/', [KlantenController::class, 'index'])->name('home');
Route::post('/fetch-data/{id}', [KlantenController::class, 'editData'])->name('edit-data');
Route::post('/store', [KlantenController::class, 'store'])->name('create');
Route::post('/delete/{id}', [KlantenController::class, 'delete'])->name('delete');
Route::patch('/update', [KlantenController::class, 'update'])->name('update');