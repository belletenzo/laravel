@extends('layout')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Ajouter un client</h2>
            </div>
            <div class="panel-body">
                <form class="" action="/backoffice/customers/add" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="first_name">Prenom :</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Prénom">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Nom :</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <label for="address">Adresse :</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Adresse">
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Code Postal :</label>
                        <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Code Postal">
                    </div>
                    <div class="form-group">
                        <label for="city">Code Postal :</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Ville">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
