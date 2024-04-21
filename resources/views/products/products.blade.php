<!-- resources/views/products/products.blade.php -->

@extends('default')

@section('title', 'Products')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">${{ $product['price'] }}</p>
                            <p class="card-text">Rating: {{ $product['rating'] }}</p>
                            <p class="card-text">Category: {{ $product['category'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
