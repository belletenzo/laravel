<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{

    public function productList(){

        $products = Product::all();
        return view('product-list',['products' => $products]);
    }

    public function productListOrderByName(){

        $products = Product::orderBy('name')->get();
        return view('product-list',['products' => $products]);
    }

    public function productListOrderByAscPrice(){

        $products = Product::orderBy('price','asc')->get();
        return view('product-list',['products' => $products]);
    }

    public function detailedProduct($id){

        $productById = Product::find($id);
//        $productById = Product::all()->where('id','=',$id);
        return view("product-details", compact('productById'));
    }

}
