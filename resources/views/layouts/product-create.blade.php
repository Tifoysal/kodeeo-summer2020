@extends('master')

@section('content')
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf()
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product name">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Product Price</label>
            <input name="product_price" type="text" class="form-control" id="exampleInputPassword1" placeholder="Price ">
        </div>

        <div class="form-group">
            <label for="">Product Image</label>
            <input name="product_image" type="file" class="form-control" id="exampleInputPassword1" placeholder="Price ">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop
