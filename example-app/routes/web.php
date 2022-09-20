<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
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
Route::get('/product', [ProductController::class, 'productList']);
Route::get('/productname', [ProductController::class, 'productListOrderByName']);
Route::get('/productascprice', [ProductController::class, 'productListOrderByAscPrice']);
//Produit detaillé :
Route::get('/product/{id}', [ProductController::class, 'detailedProduct']);
//Panier :
Route::get('/cart', [CartController::class, 'displayCart']);

//Page d'accueil Bo :
Route::get('/backoffice',[AdminController::class,'index']);

//Bo Product :
Route::get('/backoffice/create', [AdminController::class, 'create']);
Route::post('/backoffice/add', [AdminController::class, 'store']);
Route::delete('/backoffice/{id}', [AdminController::class, 'destroy']);
Route::get('/backoffice/edit/{id}', [AdminController::class, 'edit']);
Route::put('/backoffice/edit/{id}',[AdminController::class, 'update']);

//Bo Categories :
Route::get('/backoffice/categories',[CategoriesController::class, 'index']);
Route::get('/backoffice/categories/create',[CategoriesController::class, 'create']);
Route::post('/backoffice/categories/add', [CategoriesController::class, 'store']);
Route::get('/backoffice/categories/edit/{id}',[CategoriesController::class, 'edit']);
Route::put('/backoffice/categories/edit/{id}',[CategoriesController::class, 'update']);
Route::delete('/backoffice/categories/{id}', [CategoriesController::class, 'destroy']);

//Bo Customers :
Route::get('/backoffice/customers', [CustomersController::class, 'index']);
Route::get('/backoffice/customers/create', [CustomersController::class, 'create']);
Route::post('/backoffice/customers/add', [CustomersController::class, 'store']);

// BO Orders :
Route::get('/backoffice/orders', [OrdersController::class, 'index']);
