<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/least-ordered-products-per-day',[UsersController::class,'index']);
Route::resource('/least-ordered-products-per-day', UsersController::class);
####################
// Five tables 

// Users
// Marchents
// Orders
// Order Items 
// Products