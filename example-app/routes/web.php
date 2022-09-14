<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return "Listes des produits";
});

Route::get('/product/{id}', function ($id) {
    return "Fiche du produit ".$id;
});

<<<<<<< HEAD
Route::get('/cart', [CartController::class, 'displayCart']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::get('/cart', function () {
    return "Panier";
});
>>>>>>> parent of a83fcf0 (Creation des controllers)
