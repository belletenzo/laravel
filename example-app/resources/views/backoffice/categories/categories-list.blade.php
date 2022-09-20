@extends('layout')
@section('title', 'Backoffice')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
        <a href="/backoffice" class=" btn btn-dk btn-dark">Retour</a>
        <a href="/backoffice/categories/create" class=" btn btn-dk btn-danger">Ajouter une catégorie</a>
        <table class="table">
            <tr>
                <td>ID :</td>
                <td>Nom :</td>
                <td></td>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td><a href="/backoffice/categories/edit/{{$category->id}}" class=" btn btn-dk btn-dark">Edit</a></td>
                    <td><form style='margin:0' action="/backoffice/categories/{{$category->id}}" method="POST"
                              onclick="confirm('Êtes vous sûr de vouloir supprimer ce produit ??');">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="submit" value="Delete">
                        </form></td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
