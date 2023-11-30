@extends('backend.master')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">Product List
            <a class="btn btn-dm btn-primary" href="{{ route('create') }}">Add Product</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table tablr-sm table-borderd">
            @php
                $i =1;
            @endphp
            <thead>
              <tr class="dark">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('show', $product->id) }}" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ route('edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('destroy', $product->id) }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection