@extends('layout')
@section('title', 'Backoffice')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
        <a href="/backoffice/create" class=" btn btn-dk btn-danger">Ajouter un Article</a>
        <a href="/backoffice/categories" class=" btn btn-dk btn-danger">Voir les catégories</a>
        <a href="/backoffice/orders" class=" btn btn-dk btn-danger">Voir les commandes</a>
        <a href="/backoffice/customers" class=" btn btn-dk btn-danger">Voir les clients</a>

        <div class="product">
            <table class="table" style="vertical-align:middle">
                <tr>
                    <td>ID :</td>
                    <td>Name :</td>
                    <td>Prix :</td>
                    <td>Promo :</td>
                    <td>Poids :</td>
                    <td>Stock :</td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}} €</td>
                        <td>{{$product->discount}}%</td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->quantity}}</td>
                        <td><a href="/product/{{$product->id}}" class=" btn btn-dk btn-dark">Voir l'article</a>
                        </td>
                        <td><a href="/backoffice/edit/{{$product->id}}" class=" btn btn-dk btn-dark">Edit</a></td>
                        <td>
                            <form style='margin:0' action="/backoffice/{{$product->id}}" method="POST"
                                  onclick="confirm('Êtes vous sûr de vouloir supprimer ce produit ??');">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
