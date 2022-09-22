<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('backoffice.products.index', ['products' => $products]);
    }


    public function create()
    {
        return view('backoffice.products.create');
    }


    public function store(Request $request)
    {
        $request->validate([
                'name' =>'required',
                'category_id'=>'required',
                'price'=>'required | integer | min:1',
                'image'=>'required',
            ]
        );
        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->quantity = $request->quantity;
        $product->discount = $request->discount;
        $product->save();
        return redirect('backoffice/products');
    }


    public function show($id)
    {
        //
    }


    public function edit(Product $product)
    {
        return view('backoffice.products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
                'name' =>'required',
                'category_id'=>'required',
                'price'=>'required | integer | min:1',
                'image'=>'required',
            ]
        );
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->quantity = $request->input('quantity');
        $product->discount = $request->input('discount');
        $product->update();
        return redirect('/backoffice/products');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/backoffice/products');
    }
}
