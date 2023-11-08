<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'index'])->name(PublicController::ROUTE_INDEX);
Route::get('/check', [PublicController::class, 'check'])->name(PublicController::ROUTE_CHECK);
Route::get('/edit', [PublicController::class, 'edit'])->name(PublicController::ROUTE_EDIT);
