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

Route::get('/stockProduct', function () {return view('StockProduct');});
Route::get('/Product', function () {return view('Product');});
Route::get('/add-product', function () {return view('add-product');});
