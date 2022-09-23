@extends('layout')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
    <table class="table" style="vertical-align:middle">
        <tr>
            <td>ID :</td>
            <td>Name :</td>
            <td>Category :</td>
            <td>Prix :</td>
            <td>Promo :</td>
            <td>Poids :</td>
            <td>Quantité :</td>
            <td></td>


        </tr>
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->price}} €</td>
                <td>{{$product->discount}}%</td>
                <td>{{$product->weight}}</td>
                <td>{{$quantity}}</td>
                <td><a href="/product/{{$product->id}}" class=" btn btn-dk btn-dark">Voir l'article</a>
                </td>
            </tr>
    </table>
    </div>
@endsection
