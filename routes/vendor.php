<?php
/**
 * Author: SULAIMAN
 * Email: sulaiman@sendajapan.com
 * Website: https://www.sulaimansan.com
 *
 * Description: Brief description of the code or file.
 *
 * Date: 10/30/2023
 */

/** Vendor Routes */

use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProfileController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
Route::get('profile', [VendorProfileController::class, 'index'])->name('profile');
Route::put('profile', [VendorProfileController::class,'update'])->name('profile.update');
Route::post('profile', [VendorProfileController::class,'updatePassword'])->name('profile.update.password');

