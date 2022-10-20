<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::prefix('auth')->group(function () {
    Route::post('login', [App\Http\Controllers\LoginController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\LoginController::class, 'logout']);
});

Route::apiResource('users', App\Http\Controllers\UserController::class);

Route::apiResource('customers', App\Http\Controllers\CustomerController::class);

Route::apiResource('contacts', App\Http\Controllers\ContactController::class);

Route::apiResource('products', App\Http\Controllers\ProductController::class);

Route::apiResource('orders', App\Http\Controllers\OrderController::class);

Route::apiResource('sales', App\Http\Controllers\SaleController::class);

Route::apiResource('countries', App\Http\Controllers\CountryController::class);

Route::apiResource('inspections', App\Http\Controllers\InspectionController::class);

// Route::post('order',[App\Http\Controllers\OrderController::class,'send_message']);
