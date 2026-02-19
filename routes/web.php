<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/register', function() {
    return view('register');
});

Route::post('/register', Register::class);

Route::post('/login', Login::class);
