@extends('layout')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Modifier un article</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/backoffice/edit/{{$product->id}}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}" id="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="category_id">Category ID :</label>
                    <select name="category_id" value="{{$product->category_id}}">
                        <option value="1">Tech</option>
                        <option value="2">Electroménager</option>
                        <option value="3">Hygiène</option>
                        <option value="4">Ustensiles</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <input type="text" class="form-control" name="description" value="{{$product->description}}" id="description"
                           placeholder="description">
                </div>
                <div class="form-group">
                    <label for="image">Image :</label>
                    <input type="text" class="form-control" name="image" value="{{$product->image}}" id="image" placeholder="image">
                </div>
                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="text" class="form-control" name="price" value="{{$product->price}}" id="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="weight">Poids :</label>
                    <input type="text" class="form-control" name="weight" value="{{$product->weight}}" id="weight" placeholder="weight">
                </div>
                <div class="form-group">
                    <label for="quantity">Stock :</label>
                    <input type="text" class="form-control" name="quantity" value="{{$product->quantity}}" id="quantity" placeholder="quantity">
                </div>
                <div class="form-group">
                    <label for="discount">Promo :</label>
                    <input type="text" class="form-control" name="discount" value="{{$product->discount}}" id="discount" placeholder="discount">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
