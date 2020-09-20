@extends('master')

@section('content')

    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

    <form action="{{route('category.store')}}" method="post">
        @csrf
        <label for="">Category Name:</label>
        <input name="category_name" placeholder="Enter category Name" type="text" class="form-control">

        <label for="">Category Status:</label>
        <select name="status" class="form-control">
            <option value="">select an option</option>
            <option value="active">Active</option>
            <option value="inactive">inactive</option>
        </select>

        <button type="submit" class="btn btn-success">Success</button>
    </form>

    @stop
