<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', Login::class);

Route::get('/register', function() {
    return view('auth.register');
});
Route::post('/register', Register::class);

Route::post('/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('/', [ProjectController::class, 'index']);
    Route::resource('projects', ProjectController::class)->only([
        'store', 'create', 'show'
    ]);

    Route::resource('projects.tickets', TicketController::class)->only([
        'create', 'store', 'show'
    ]);
});