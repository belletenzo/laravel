@extends('layout')
@section('title', 'Article')
@section('content')
    @dump($productById)
    <div class="container-fluid w-50 mt-4">
<h1>Fiche du produit </h1>
<div class="col-lg-3 col-md-6 col-sm-6">
        <div class="product">
            <form action="cart" method="POST">
                <p>Nom : {{$productById->name}}</p>
                <p>Price : {{$productById->price}} €</p>
                <p>Description : skdsjkdkoqkdoksokdjjsjhjdsjjdjskjkdjksjkjdkjskjkdjskjdkjksjkdjksjkjdkjskjdkjskjdksjdk </p>
                <p>Weight : {{$productById->weight}} </p>
                <p>Stock : {{$productById->quantity}} </p>
                <input type="number" name="quantity" value="0" min="0" max="99">
                <a href="/cart" class=" btn btn-dk btn-secondary">Ajouter au panier</a>
            </form>
        </div>
    </div>
    <img
        src="{{$productById->image}}"
        alt="" class="w-75 img-fluid">
    </div>
@endsection


