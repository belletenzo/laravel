@extends('layout')
@section('title', 'Backoffice')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
        <a href="/backoffice" class=" btn btn-dk btn-dark">Retour</a>
        <a href="/backoffice/customers/create" class=" btn btn-dk btn-danger">Ajouter un client</a>
    <table class="table">
        <tr>
            <td>Id :</td>
            <td>Prénom :</td>
            <td>Nom de famille :</td>
            <td>Adresse :</td>
            <td>Code Postal :</td>
            <td>Ville :</td>
            <td></td>
            <td></td>
        </tr>
    @foreach($customers as $customer)
        <tr>
        <td>{{$customer->id}}</td>
        <td>{{$customer->first_name}}</td>
        <td>{{$customer->last_name}}</td>
        <td>{{$customer->adress}}</td>
        <td>{{$customer->postal_code}}</td>
        <td>{{$customer->city}}</td>
            <td></td>
            <td><form style='margin:0' action="/backoffice/customers/{{$customer->id}}" method="POST"
                      onclick="confirm('Êtes vous sûr de vouloir supprimer ce client ??');">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" value="Delete">
                </form></td>
        </tr>
        @endforeach
    </table>

    </div>
@endsection
