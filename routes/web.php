<?php

use App\Http\Controllers\getdataController;
use App\Http\Controllers\productController;
use App\Http\Controllers\tokoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [getdataController::class, 'index'])->name('index');
route::get('/filter', [getdataController::class, 'filterdata'])->name('data.filter');
route::resource('/product', productController::class);
route::resource('/toko', tokoController::class);