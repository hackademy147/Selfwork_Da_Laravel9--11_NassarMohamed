<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class,'home'])->name('home');
Route::get('Trip/create', [TripsController::class,'create'])->name('trip.create');
Route::post('Trip/store', [TripsController::class,'store'])->name('trip.store');
Route::get('Trip/index', [TripsController::class,'index'])->name('trip.index');
Route::get('Trip/show/{trip}', [TripsController::class,'show'])->name('trip.show');
Route::get('Trip/edit/{trip}', [TripsController::class,'edit'])->name('trip.edit');
Route::put('Trip/update/{trip}', [TripsController::class,'update'])->name('trip.update');
Route::delete('Trip/destroy/{trip}', [TripsController::class,'destroy'])->name('trip.destroy');