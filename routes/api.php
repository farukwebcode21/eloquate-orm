<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-brand', [BrandController::class, 'inserData']);
Route::post('/create-update-brand/{brandName}', [BrandController::class, 'UpdateOrInsert']);
Route::get('/delete-brand/{id}', [BrandController::class, 'DeleteBrand']);
Route::post('/update-data/{id}', [CategorieController::class, 'UpdateCategoryData']);
