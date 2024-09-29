<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('registersave',[UserController::class,'register'])->name('registersave');

Route::view('register','register')->name('register');

Route::view('login','login')->name('login');

Route::post('loginmatch',[UserController::class,'login'])->name('loginmatch');

Route::get('dashboard',[UserController::class,'dashboardPage'])->name('dashboard');

Route::get('dashboard/inner',[UserController::class,'inner'])->name('inner');

Route::get('logout',[UserController::class,'logout'])->name('logout');