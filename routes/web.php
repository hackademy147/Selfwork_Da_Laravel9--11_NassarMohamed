<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class,'home'])->name('home');
Route::get('Trip/create', [TripsController::class,'create'])->name('create');
Route::post('Trip/store', [TripsController::class,'store'])->name('store');
Route::get('Trip/index', [TripsController::class,'index'])->name('index');
