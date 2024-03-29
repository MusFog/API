<?php

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

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\NewsController;

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{categoryId}/news', [NewsController::class, 'newsByCategory']);
Route::get('/news/{newsId}', [NewsController::class, 'show']);
