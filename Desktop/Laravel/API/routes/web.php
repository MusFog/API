<?php

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

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\CategoryController;
Route::get('/', function () {
    return view('welcome');
})->name('home');





Route::post('/categories/news', [Controller::class, 'ToNewsByCategory'])->name('ToNewsByCategory');
Route::post('/news/show', [Controller::class, 'NewsDetails'])->name('NewsDetails');
Route::get('/categories', [Controller::class, 'showCategories'])->name('showCategories');
