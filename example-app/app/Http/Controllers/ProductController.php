<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products-list', compact('products'));
    }

    public function productListOrderByName(){

        $products = Product::orderBy('name')->get();
        return view('product-list',['products' => $products]);
    }

    public function productListOrderByAscPrice(){

        $products = Product::orderBy('price','asc')->get();
        return view('product-list',['products' => $products]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {

        $productById = Product::find($id);
//        $productById = Product::all()->where('id','=',$id);
        return view("product-details", compact('productById'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
