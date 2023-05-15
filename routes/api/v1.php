<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// !controllers
use App\Http\Controllers\Api\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes v1
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [RegisterController::class, 'store'])->name('api.v1.register');

// Route::get('categories',[CategoryController::class, 'index'])->name('api.v1.categories.index');
// Route::post('categories',[CategoryController::class, 'store'])->name('api.v1.categories.store');
// Route::get('categories/{category}',[CategoryController::class, 'show'])->name('api.v1.categories.show');
// Route::put('categories/{category}',[CategoryController::class, 'update'])->name('api.v1.categories.update');
// Route::delete('categories/{category}',[CategoryController::class, 'destroy'])->name('api.v1.categories.destroy');

Route::apiResource('categories',CategoryController::class)->names('api.v1.categories');

