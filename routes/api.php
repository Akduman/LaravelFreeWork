<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\UserController;
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

Route::middleware('auth:api')->get('/user_default', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return 'api test';
});

Route::apiResource('categories', CategoryController::class);
Route::apiResource('/products', ProductController::class);
Route::apiResource('/users', UserController::class);




