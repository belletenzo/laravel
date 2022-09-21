@extends('layout')
@section('title', 'Backoffice')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Back-Office</h1>
                <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                <a href="{{route('products.index')}}" class=" btn btn-dk btn-danger">Voir les articles</a>
                <a href="{{route('categories.index')}}" class=" btn btn-dk btn-danger">Voir les catégories</a>
                <a href="{{route('orders.index')}}" class=" btn btn-dk btn-danger">Voir les commandes</a>
                <a href="{{route('customers.index')}}" class=" btn btn-dk btn-danger">Voir les clients</a>
            </div>

        </div>
    </div>
@endsection
