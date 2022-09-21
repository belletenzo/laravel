@extends('layout')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Modifier une catégorie</h2>
            </div>
            <div class="panel-body">
                <form class="" action="{{route('categories.update', ['category' => $category])}}" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" class="form-control" name="name" value="{{$category->name}}" id="name" placeholder="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
