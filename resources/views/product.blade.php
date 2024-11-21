@extends('layout')

@section('title', 'Home')

@section('content')

<div class="container my-4">
    <h2 class="text-center mb-4">Our Products</h2>
    <style>
        .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: contain; 
        }
    </style>

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                        <p class="card-text">Price: Rs.{{ number_format($product->price, 2) }}</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
