<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{status?}',    [PublicController::class, 'index'])     ->name(PublicController::ROUTE_INDEX);
Route::get('/user/register',     [PublicController::class, 'register'])  ->name(PublicController::ROUTE_REGISTER);
Route::get('/user/auth/',         [PublicController::class, 'auth'])      ->name(PublicController::ROUTE_AUTH);
