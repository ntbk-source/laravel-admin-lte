<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::controller(ProfileController::class)->name('profile.')->middleware('auth')->group(function () {
    Route::get('/profile', 'index')->name('index');
    Route::put('/profile', 'update')->name('update');
});

Route::controller(UsersController::class)->name('users.')->middleware('auth')->group(function () {
    Route::get('/users', 'index')->name('index');
    Route::post('/users', 'store')->name('store');
    Route::get('/users/create', 'create')->name('create');
    Route::get('/users/{user}/edit', 'edit')->name('edit');
    Route::put('/users/{user}/update', 'update')->name('update');
    Route::delete('/users/{user}/delete', 'destroy')->name('destroy');
});

require 'auth.php';
