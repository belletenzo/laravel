<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function productList(){
        $products = DB::select('select * from products');
        return view('product-list',['products' => $products]);
    }

    public function detailedProduct($id){
        $productById = DB::table('products')->where('id', '=', $id) ->get();
        return view("product-details", compact('productById'));
    }
}
