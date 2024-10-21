<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('auth/steam', [AuthController::class, 'redirectToSteam'])->name('auth.steam');
Route::get('auth/steam/handle', [AuthController::class, 'handle'])->name('auth.steam.handle');

