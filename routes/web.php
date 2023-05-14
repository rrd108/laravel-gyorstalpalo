<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\AitoolsController;
use App\Http\Controllers\CategoriesController;

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

Route::resource('aitools', AitoolsController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('tags', TagsController::class);
