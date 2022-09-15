@extends('layout')
@section('title', 'Listes des articles')
@section('content')
@php
dump($products);
@endphp
<div class="container-fluid w-75 mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            @foreach($products as $product)
            <div class="card mb-4 shadow-sm border border-3 border-secondary">
                <div class="card-body ">
                    <div class="product">
                        <form action="cart" method="POST">
                            <h3>{{$product->name}}</h3>
                            <p>{{$product->price}}</p>
                            <p>{{$product->discount}}</p>
                            <input type="number" name="quantity" value="0" min="0" max="99">
                            <a href="product/{id}/" class=" btn btn-dk btn-secondary">Voir l'article</a>
                        </form>
                    </div>
                </div>
                <img
                    src="{{asset($product->image)}}"
                    alt="" class="w-100 img-fluid">
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection



