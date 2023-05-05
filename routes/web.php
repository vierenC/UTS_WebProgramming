<?php

use App\Http\Controllers\CoffeeController;
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

Route::get('/', [CoffeeController::class, 'home'])->name("home");
Route::get('/coffee', [CoffeeController::class,"index"])->name("coffee");
Route::post('/coffee', [CoffeeController::class,"buy"]);
Route::get('/transaction', [CoffeeController::class,"transaction"])->name("transaction");


