@extends('backend.master')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">Product Create
            <a class="btn btn-dm btn-primary" href="{{ route('index') }}">Product List</a>
        </div>
    </div>
    <div class="card-body">
            <form action="{{ route('store') }}" method="post">
                @csrf
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Product name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" placeholder="Enter Product quantity">
                @error('quantity')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control" placeholder="Enter Product price">
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div>
                    <button type="submit" class="btn btn-sm btn-primary mt-2">Save</button>
                </div>
               
            </form>
    </div>
</div>

@endsection