@extends('layout')
@section('title', 'Article')
@section('content')
@dump($productById)
<h1>Fiche du produit </h1>

<div class="col-lg-3 col-md-6 col-sm-6">
<div class="card mb-4 shadow-sm border border-3 border-secondary">
    @foreach($productById as $product)
    <div class="card-body ">
        <div class="product">
            <form action="cart" method="POST">
                <h3>{{$product->name}}</h3>
                <p>Price : {{$product->price}} €</p>
                <p>Description : skdsjkdkoqkdoksokdjjsjhjdsjjdjskjkdjksjkjdkjskjkdjskjdkjksjkdjksjkjdkjskjdkjskjdksjdk </p>
                <p>Stock :{{$product->quantity}} </p>
                <input type="number" name="quantity" value="0" min="0" max="99">
                <a href="/cart" class=" btn btn-dk btn-secondary">Ajouter au panier</a>
            </form>
        </div>
    </div>
    <img
        src="{{$product->image}}"
        alt="" class="w-100 img-fluid">
    @endforeach
</div>
</div>
@endsection


