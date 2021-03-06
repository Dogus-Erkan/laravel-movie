<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Homepage;
use App\Http\Controllers\Front\MoviesController;
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

Route::get('/',[MoviesController::class,'index'])->name('homepage');
Route::get('/filmler/{movie}',[MoviesController::class,'show'])->name('movies.show');
Route::get('/diziler/{movie}',[MoviesController::class,'show'])->name('tv.show');
