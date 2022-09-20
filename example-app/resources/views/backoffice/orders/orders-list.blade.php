@extends('layout')
@section('title', 'Backoffice')
@section('content')
    <div class="bg-light  border  border-2 container-fluid w-75 mt-4">
        <a href="/backoffice" class=" btn btn-dk btn-dark">Retour</a>
    <table class="table">
        <tr>
            <td>ID : </td>
            <td>Number :</td>
            <td>ID Customer :</td>
            <td>Date :</td>
            <td>Total :</td>
        </tr>
    @foreach($orders as $order)
        <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->number}}</td>
        <td>{{$order->customer_id}}</td>
        <td>{{$order->date}}</td>
        <td>{{$order->total}}</td>
        </tr>
        @endforeach
        </table>
    </div>
@endsection
