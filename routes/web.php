<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 

Route::get('/{any?}',[App\Http\Controllers\AppController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
