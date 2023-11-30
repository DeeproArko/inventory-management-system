@extends('backend.master')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">Products
            <a class="btn btn-dm btn-primary" href="{{ route('create') }}">Add Product</a>
        </div>
    </div>
    <div class="card-body">
           
        <div class="boder border-1 p-3">
            <p>Product name: {{ $product->name ?? 'No Name' }}</p>
            <p>Product Quantity: {{!! $product->quantity ?? 'No Quantity' !!}}</p>
            <p>Product Price: {{!! $product->price ?? 'No Price' !!}}</p>
        </div>
    </div>
</div>

@endsection