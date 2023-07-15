<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create-brand', [BrandController::class, 'inserData']);
Route::post('/update-data/{id}', [CategorieController::class, 'UpdateCategoryData']);
