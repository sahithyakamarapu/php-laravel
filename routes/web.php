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