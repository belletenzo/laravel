<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('backoffice', ['products' => $products]);
    }


    public function create()
    {
        return view('backoffice.backoffice-create');
    }


    public function store(Request $request)
    {
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
        return view('backoffice.result', $product);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('backoffice.backoffice-edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->quantity = $request->input('quantity');
        $product->discount = $request->input('discount');
        $product->update();
        return redirect('/backoffice/edit/{id}');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/backoffice');
    }
}
