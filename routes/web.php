<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloSahithyaController;  
Route::get('/', function () {
    return view('welcome');
});
Route::get('/sahithya', [HelloSahithyaController::class, 'index']);