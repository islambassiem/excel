<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
  return view('welcome');
})->name('home');

Route::post('add', [UserController::class, 'store'])->name('add');
