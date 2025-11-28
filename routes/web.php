<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.index');
});

Route::get('login', fn () => to_route('login.create'))->name('login');
Route::resource('login', LoginController::class)->only(['create', 'store']);

Route::get('register', fn () => to_route('register.create'))->name('register');
Route::resource('register', RegisterController::class)->only(['create', 'store']);

Route::resource('main', MainController::class)->middleware('auth');

Route::resource('order', OrderController::class)->middleware('auth');
