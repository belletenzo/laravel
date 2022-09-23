@extends('layout')
@section('title', 'Listes des articles')
@section('content')

    <div class="container-fluid w-75 mt-4">
        <a href="productname" class=" btn btn-dk btn-secondary">Trier par nom</a>
        <a href="productascprice" class=" btn btn-dk btn-secondary">Trier par prix croissant</a>
        <a href="/product" class=" btn btn-dk btn-secondary">Par défaut</a>
        @if(session('error'))
                <li class="text-red-500 list-none">
                    {{session('error')}}
                </li>
        @endif
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card mb-4 shadow-sm border border-3 border-secondary">
                        <div class="card-body ">
                            <div class="product">
                                    <h3>{{$product->name}}</h3>
                                    <p>Category : {{$product->category->name}}</p>
                                    <p>Prix : {{$product->price}} €</p>
                                    <p>Promo : {{$product->discount}}%</p>
                                    <a href="product/{{$product->id}}/" class=" btn btn-dk btn-secondary">Voir
                                        l'article</a>
                                <form action="cart/{{$product->id}}" method="post">
                                    @csrf
                                    <label for="quantity">
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <input type="number" value="1" name="quantity" class="form-control" style="width:180px">
                                    </label>
                                    <input class="btn btn-danger" type="submit" value="Ajouter au panier">
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



