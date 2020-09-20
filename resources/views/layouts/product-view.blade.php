@extends('master')

@section('content')

    <label for="">Product Name:</label><h4>{{$thisProduct->name}}</h4>

    <label for=""> Price:</label> <h4>{{$thisProduct->price}}</h4>

@stop
