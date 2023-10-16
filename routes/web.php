<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('home');
});



Route::post('/home', [RegisterController::class, 'home']);
Route::post('/about', [RegisterController::class, 'home']);
Route::post('/contact', [RegisterController::class, 'home']);
Route::post('/chat', [RegisterController::class, 'home']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);