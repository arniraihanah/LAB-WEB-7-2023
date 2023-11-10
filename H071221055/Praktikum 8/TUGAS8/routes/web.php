<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/products', [ProductController::class, "products"]);
Route::get('/products/Motorcycles', [ProductController::class, "Motorcycles"]);
Route::get('/products/Planes', [ProductController::class, "Planes"]);
Route::get('/products/ClassicCars', [ProductController::class, "ClassicCars"]);
Route::get('/products/TrucksandBuses', [ProductController::class, "TrucksandBuses"]);
Route::get('/products/VintageCars', [ProductController::class, "VintageCars"]);
Route::get('/products/Trains', [ProductController::class, "Trains"]);
Route::get('/products/Ships', [ProductController::class, "Ships"]);
Route::get('/products/{id}', [ProductController::class, 'get_product_details'])->name('productCode');
