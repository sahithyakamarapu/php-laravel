<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloSahithyaController;  
Route::get('/', function () {
    return view('welcome');
});
Route::get('/sahithya', [HelloSahithyaController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/sum/{num1}/{num2}', [HelloSahithyaController::class, 'sum']);
Route::get('/substract/{num1}/{num2}', [HelloSahithyaController::class, 'substract']);
Route::get('/multiply/{num1}/{num2}', [HelloSahithyaController::class, 'multiply']);
Route::get('/divide/{num1}/{num2}', [HelloSahithyaController::class, 'divide']);
