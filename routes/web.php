<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

Route::get('/', [AuthenticationController::class, "showLoginForm"])->name("loginForm");
Route::post('/loginUser', [AuthenticationController::class, "loginUser"])->name("loginUser");
Route::get('/registerForm', [AuthenticationController::class, "showRegisterForm"])->name("registerForm");
Route::post('/registerUser', [AuthenticationController::class, "registerUser"])->name("registerUser");
