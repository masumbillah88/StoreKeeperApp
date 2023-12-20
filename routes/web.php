<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;

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
Route::get('/app',[ProductController::class,'index'])->name('product.app');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
Route::get('/product/productList',[ProductController::class, 'productList'])->name('product.productList');
Route::get('/sale', [SaleController::class, 'index'])->name('sale.index');
Route::post('/sale', [SaleController::class, 'store'])->name('sale.store');
Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/salesTransaction', [SaleController::class, 'SalesReport'])->name('product.SalesReport');
