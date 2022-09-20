@extends('layout')
@section('title', 'Backoffice')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
    <table class="table">
        <tr>
            <td>Id :</td>
            <td>Prénom :</td>
            <td>Nom de famille :</td>
            <td>Adresse :</td>
            <td>Code Postal :</td>
            <td>Ville :</td>
        </tr>
    @foreach($customers as $customer)
        <tr>
        <td>{{$customer->id}}</td>
        <td>{{$customer->first_name}}</td>
        <td>{{$customer->last_name}}</td>
        <td>{{$customer->adress}}</td>
        <td>{{$customer->postal_code}}</td>
        <td>{{$customer->city}}</td>
        </tr>
        @endforeach
    </table>
        <a href="/backoffice" class=" btn btn-dk btn-dark">Retour</a>
    </div>
@endsection
