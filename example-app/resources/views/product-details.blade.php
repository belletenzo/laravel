@extends('layout')
@section('title', 'Article')
@section('content')
    <div class="container-fluid w-50 mt-4">
<h1>Fiche du produit </h1>
<div class="col-lg-3 col-md-6 col-sm-6">
        <div class="product">
                <p>Nom : {{$productById->name}}</p>
                <p>Price : {{$productById->price}} €</p>
                <p>Description : skdsjkdkoqkdoksokdjjsjhjdsjjdjskjkdjksjkjdkjskjkdjskjdkjksjkdjksjkjdkjskjdkjskjdksjdk </p>
                <p>Weight : {{$productById->weight}} </p>
                <p>Stock : {{$productById->quantity}} </p>
                <a href="/cart" class=" btn btn-dk btn-secondary">Ajouter au panier</a>
        </div>
    </div>
    <img
        src="{{$productById->image}}"
        alt="" class="w-75 img-fluid">
    </div>
@endsection


