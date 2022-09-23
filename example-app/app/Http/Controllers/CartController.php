<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $product = Product::findOrFail($request->input('product_id'));
        $quantity = $request->input('quantity');
        if ($quantity > $product->quantity) {
            return redirect('/product')->with('error','Pas assez de produit en stock');
        } else {
            return view('cart', compact('product'), compact('quantity'));
        }
    }


    public function show($id)
    {
        //
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
