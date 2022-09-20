@extends('layout')
@section('title', 'Backoffice')
@section('content')
    <div class="bg-secondary  border border-danger border-3 container-fluid w-75 mt-4">
        <a href="/backoffice/create" class=" btn btn-dk btn-light">Ajouter un Article</a>

        @foreach($products as $product)
            <div class="product">
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}} €</td>
                    <td>{{$product->discount}}%</td>
                    <a href="/product/{{$product->id}}" class=" btn btn-dk btn-secondary">Voir l'article</a>
                    <a href="/backoffice/edit/{{$product->id}}" class=" btn btn-dk btn-secondary">Edit</a>
                    <form action="/backoffice/{{$product->id}}" method="POST" onclick="confirm('Êtes vous sûr de vouloir supprimer ce produit ??');">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input type="submit" value="Delete">
                    </form>
            </div>
        @endforeach
    </div>
@endsection
