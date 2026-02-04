<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [SignupController::class, 'create']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
