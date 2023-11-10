<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\ProductController;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\Auth\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',    [RegisterController::class, 'register'])    ->name(RegisterController::ROUTE_REGISTER);
Route::get('/changeRole',   [RegisterController::class, 'changeRole'])  ->name(RegisterController::ROUTE_CHANGE_ROLE);
Route::post('/auth',        [AuthController::class, 'auth'])            ->name(AuthController::ROUTE_AUTH);
Route::get('/logout',       [AuthController::class, 'logout'])          ->name(AuthController::ROUTE_LOGOUT);
Route::post('/create',      [ProductController::class, 'create'])       ->name(ProductController::ROUTE_CREATE);
Route::post('/edit',        [ProductController::class, 'edit'])         ->name(ProductController::ROUTE_EDIT);
Route::post('/delete/{id}', [ProductController::class, 'delete'])       ->name(ProductController::ROUTE_DELETE);
