@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Type</th>
                <th>Category</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->type->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>${{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
