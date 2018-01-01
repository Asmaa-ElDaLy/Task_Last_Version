@extends('Layer.master')

@section('title')
    Order Shopping Cart
@endsection

@section('content')
    @if(Session::has('carto'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="label label-success">{{ $product['price'] }} $ </span>
                            <div class="btn-group">
                                <a href="{{ route('Orderlist.del', ['id' => $product['item']['id']]) }}" type="button" class="btn btn-danger">Remove</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total Price: {{ $totalPrice }} $ </strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('Orderlist.delAll')}}" type="button" class="btn btn-danger">Remove All</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Order Cart!</h2>
            </div>
        </div>
    @endif
@endsection