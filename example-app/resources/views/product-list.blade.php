@extends('layout')
@section('title', 'Listes des articles')
@section('content')
@dump($products);

<div class="container-fluid w-75 mt-4">
    <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card mb-4 shadow-sm border border-3 border-secondary">
                <div class="card-body ">
                    <div class="product">
                        <form action="cart" method="POST">
                            <h3>{{$product->name}}</h3>
                            <p>Prix : {{$product->price}} €</p>
                            <p>Promo : {{$product->discount}}%</p>
                            <a href="product/{{$product->id}}/" class=" btn btn-dk btn-secondary">Voir l'article</a>
                        </form>
                    </div>
                </div>
                <img src="{{$product->image}}" alt="" class="w-100 img-fluid">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection



