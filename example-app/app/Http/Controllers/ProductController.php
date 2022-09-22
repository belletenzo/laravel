<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products-list', compact('products'));
    }

    public function productListOrderByName(){

        $products = DB::table('products')
            ->orderByRaw('name')
            ->get();

        return view('products-list',['products' => $products]);
    }

    public function productListOrderByAscPrice(){

        $products = Product::orderBy('price', 'ASC')->get();
        return view('products-list',['products' => $products]);
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
