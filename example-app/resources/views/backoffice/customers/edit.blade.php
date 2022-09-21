@extends('layout')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Modifier une client</h2>
            </div>
            <div class="panel-body">
                <form class="" action="{{route('customers.update',['customer'=>$customer])}}" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-group">
                        <label for="first_name">Prénom :</label>
                        <input type="text" class="form-control" name="first_name" value="{{$customer->first_name}}" id="first_name" placeholder="Prénom">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Nom :</label>
                        <input type="text" class="form-control" name="last_name" value="{{$customer->last_name}}" id="last_name" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <label for="address">Adresse :</label>
                        <input type="text" class="form-control" name="address" value="{{$customer->address}}" id="address" placeholder="Adresse">
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Code Postal :</label>
                        <input type="text" class="form-control" name="postal_code" value="{{$customer->postal_code}}" id="postal_code" placeholder="Code Postal">
                    </div>
                    <div class="form-group">
                        <label for="city">Ville :</label>
                        <input type="text" class="form-control" name="city" value="{{$customer->city}}" id="city" placeholder="Ville">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
