<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CompanyController;

Route::get('/', [PublicController::class,'home'])->name('home');
Route::get('dashboard', [PublicController::class,'profile'])->name('auth.dashboard');


Route::get('Trip/create', [TripsController::class,'create'])->name('trip.create');
Route::post('Trip/store', [TripsController::class,'store'])->name('trip.store');
Route::get('Trip/index', [TripsController::class,'index'])->name('trip.index');
Route::get('Trip/show/{trip}', [TripsController::class,'show'])->name('trip.show');
Route::get('Trip/edit/{trip}', [TripsController::class,'edit'])->name('trip.edit');
Route::put('Trip/update/{trip}', [TripsController::class,'update'])->name('trip.update');
Route::delete('Trip/destroy/{trip}', [TripsController::class,'destroy'])->name('trip.destroy');

Route::get('company/create', [CompanyController::class,'create'])->name('company.create');
Route::post('company/store', [CompanyController::class,'store'])->name('company.store');
Route::get('company/index', [CompanyController::class,'index'])->name('company.index');
Route::get('company/show/{company}', [CompanyController::class,'show'])->name('company.show');
