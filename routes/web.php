<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('home');
});



Route::post('/home', [RegisterController::class, 'home']);
Route::post('/about', [RegisterController::class, 'about']);
Route::post('/contact', [RegisterController::class, 'contact']);
Route::post('/chat', [RegisterController::class, 'chat']);

Route::post('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);