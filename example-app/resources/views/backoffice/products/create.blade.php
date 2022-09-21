@extends('layout')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Ajouter un article</h2>
        </div>
        <div class="panel-body">
            <form class="" action="{{route('products.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="category_id">Category ID :</label>
                    <select name="category_id">
                        <option value="1">Tech</option>
                        <option value="2">Electroménager</option>
                        <option value="3">Hygiène</option>
                        <option value="4">Ustensiles</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <input type="text" class="form-control" name="description" id="description"
                           placeholder="description">
                </div>
                <div class="form-group">
                    <label for="image">Image :</label>
                    <input type="text" class="form-control" name="image" id="image" placeholder="image">
                </div>
                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="weight">Poids :</label>
                    <input type="text" class="form-control" name="weight" id="weight" placeholder="weight">
                </div>
                <div class="form-group">
                    <label for="quantity">Stock :</label>
                    <input type="text" class="form-control" name="quantity" id="quantity" placeholder="quantity">
                </div>
                <div class="form-group">
                    <label for="discount">Promo :</label>
                    <input type="text" class="form-control" name="discount" id="discount" placeholder="discount">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
