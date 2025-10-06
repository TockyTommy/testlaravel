<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/new-form', [UserController::class, 'create'])->name('infos.create');
Route::post('/new-form', [UserController::class, 'store'])->name('infos.store');
Route::get('/infos/{id}', [UserController::class, 'show'])->name('infos.show');

Route::get('/infos', [UserController::class, 'index'])->name('infos.index');