<?php

use App\Http\Controllers\AdminController;
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
Route::get('/product', [ProductController::class, 'productList']);
Route::get('/productname', [ProductController::class, 'productListOrderByName']);
Route::get('/productascprice', [ProductController::class, 'productListOrderByAscPrice']);
//Produit detaillé :
Route::get('/product/{id}', [ProductController::class, 'detailedProduct']);
//Panier :
Route::get('/cart', [CartController::class, 'displayCart']);
//Page d'accueil Bo :
Route::get('/backoffice',[AdminController::class,'index']);
//Ajouter Produit :
Route::get('/backoffice/create', [AdminController::class, 'create']);
Route::post('/backoffice/add', [AdminController::class, 'store']);
//Delete Produit :
Route::get('/backoffice/{id}', [AdminController::class, 'destroy']);
//Edit Produit :
Route::get('/backoffice/edit/{id}', [AdminController::class, 'edit']);
Route::put('/backoffice/edit/{id}',[AdminController::class, 'update']);
