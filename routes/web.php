<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;


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

Route::get('/restaurants', [RestaurantController::class,'index'])->name('restaurants.index');

Route::get('/restaurant/create', [RestaurantController::class,'create']);

Route::get('/restaurant/show/{post:id}', [RestaurantController::class,'show']);

Route::get('/restaurant/edit/{id}',[RestaurantController::class,'edit']);

Route::patch('/restaurant/edit/{post:id}',[RestaurantController::class,'update']);

Route::post('/restaurant/create', [RestaurantController::class,'store']);

Route::delete('/restaurant/destroy/{id}', [RestaurantController::class,'destroy']);
