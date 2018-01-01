@extends('Layer.master')

@section('title')
    Wish List Cart
@endsection

@section('content')
    @if(Session::has('cartw'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="label label-success">{{ $product['price'] }} $ </span>
                            <div class="btn-group">
                                <a href="{{ route('wishlist.remove', ['id' => $product['item']['id']]) }}" type="button" class="btn btn-danger">Remove</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total Price : {{ $totalPrice }} $ </strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('wishlist.removeAll')}}" type="button" class="btn btn-danger">Remove All</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Wish List Cart!</h2>
            </div>
        </div>
    @endif
@endsection