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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(BrandController::class)->group(function () {
    Route::get('/', 'getBrandName');
    Route::get('/first', 'firstData');
    Route::get('/findData', 'findData');
    Route::post('/create-brand', 'inserData');
});

Route::controller(CategorieController::class)->group(function () {
    Route::post('/update-data/{id}', 'UpdateCategoryData');
});
