<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('loginPage');
Route::get('/register', [App\Http\Controllers\UserController::class, 'register'])->name('registerPage')->middleware('guest');
Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('storeUser')->middleware('guest');
Route::get('/index', [IndexController::class,  'index'])->name('indexPage');
