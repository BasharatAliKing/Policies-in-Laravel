<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register',[UserController::class,'register'])->name('register');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/loginmatch',[UserController::class,'loginmatch'])->name('loginmatch');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::resource('book',BookController::class)->middleware('auth');