<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

Route::get('/',HomePageController::class)->name('home');


Route::resource('university',UniversityController::class);
Route::resource('program',ProgramController::class);