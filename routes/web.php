<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\fontend\AppearanceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [AppearanceController::class, "index"]);
Route::get('/details/data/{data}', [AppearanceController::class, "hub_details"]);
Route::get('/customer-dashboard', [CustomerController::class, "index"])->name('customer-dashboard');
Route::post('/calculate-total-cost', [CustomerController::class, "calculateTotalCost"])->name('calculate-total-cost');
Route::get('/check-login', function () {
    return response()->json(['logged_in' => Auth::check()]);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('/reserve', [CustomerController::class, 'reserve'])->name('reserve');
    Route::get('/customer-dashboard', [CustomerController::class, "index"])->name('customer-dashboard');
    Route::get('/driver-dashboard', [DriverController::class, "index"])->name('driver-dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
