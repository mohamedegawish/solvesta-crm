<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function(){
Route::resource('accounts', AccountController::class);

});
Route::resource('contacts', ContactController::class);
Route::get('/login',[AuthController::class, 'ShowLoginForm'])->name('login');
Route::get('/signup',[AuthController::class, 'ShowSignupForm']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/signup',[AuthController::class, 'signup']);
Route::post('/logout',[AuthController::class, 'logout']);