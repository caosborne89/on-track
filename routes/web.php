<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/register', function() {
    return view('register');
});

Route::post('/register', Register::class);

Route::post('/login', Login::class);

Route::get('/', [ProjectController::class, 'index'])->middleware('auth');
Route::post('/projects/store', [ProjectController::class, 'store'])->middleware('auth');
Route::get('/projects/create', function() {
    return view('create-project');
})->middleware('auth');

Route::get('/projects/{project}', [ProjectController::class, 'show'])->middleware('auth');

Route::get('/projects/{project}/tickets/create', [TicketController::class, 'create'])->middleware('auth');
Route::post('/projects/{project}/tickets/store', [TicketController::class, 'store'])->middleware('auth');


