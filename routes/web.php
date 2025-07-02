<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('contacts', ContactController::class);
Route::get('/login',[AuthController::class, 'ShowLoginForm']);
Route::get('/signup',[AuthController::class, 'ShowSignupForm']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/signup',[AuthController::class, 'signup']);
Route::post('/signup',[AuthController::class, 'logout']);