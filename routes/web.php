<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'show'])->middleware('auth');
Route::post('/projects/store', [ProjectController::class, 'store'])->middleware('auth');
Route::get('/projects/create', function() {
    return view('create-project');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/register', function() {
    return view('register');
});

Route::post('/register', Register::class);

Route::post('/login', Login::class);
