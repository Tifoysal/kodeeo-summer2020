@extends('master')

@section('content')

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">SL/No</th>
            <th scope="col">Image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">1</th>
            <th><img width="20%" src="{{url('images/'.$product->image)}}" alt=""></th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->qty}}</td>
            <td>
                <a href="{{route('product.view',$product->id)}}" class="btn btn-info">View</a>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>


    @endsection
