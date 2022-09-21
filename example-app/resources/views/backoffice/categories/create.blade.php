@extends('layout')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Ajouter une catégorie</h2>
            </div>
            <div class="panel-body">
                <form class="" action="{{route('categories.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nom de la catégorie :</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
