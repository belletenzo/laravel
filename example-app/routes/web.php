<?php

use App\Http\Controllers\backoffice\BackOfficeController;
use App\Http\Controllers\backoffice\ProductController as BackOfficeProductController;
use App\Http\Controllers\backoffice\CategoryController;
use App\Http\Controllers\backoffice\CustomerController;
use App\Http\Controllers\backoffice\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

//Home :
Route::get('/', [HomeController::class, 'show']);
//Listes des produits et option de tri :
Route::get('/product', [ProductController::class, 'index']);
Route::get('/productname', [ProductController::class, 'productListOrderByName']);
Route::get('/productascprice', [ProductController::class, 'productListOrderByAscPrice']);
//Produit detaillé :
Route::get('/product/{id}', [ProductController::class, 'show']);
//Panier :
Route::post('/cart/{id}', [CartController::class, 'store']);
//Bo
Route::get('backoffice', [BackOfficeController::class, 'index']);
Route::resource('backoffice/products', BackOfficeProductController::class);
Route::resource('backoffice/categories', CategoryController::class);
Route::resource('backoffice/customers', CustomerController::class);
Route::resource('backoffice/orders', OrderController::class);
