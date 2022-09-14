<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

    public function productList(){
        return view("product-list");
    }

    public function detailedProduct($id){
        return view("product-details", ['number' => $id] );
    }
}
