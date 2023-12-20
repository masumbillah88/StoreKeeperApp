@extends('layouts.app')

@section('title','Add Product')
@section('content')
<div class = "container col-4 bg-dark mt-5 p-3" style = "float:lert;">

    <form action="{{route('product.store')}}" method = "POST">
        @csrf
        @method('post')
        @if(session('success'))
        @endif

  <div class="form-group">
    <div class = "bg-success text-dark">{{session('success')}}</div>
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" name = "name" class="form-control" placeholder="Enter Product Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input type="number" name = "quantity" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" name = "price" class="form-control" id="exampleInputPassword1" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product Details </label>
    <textarea name = "description" class="form-control" ></textarea>
    <button type="submit" class="btn btn-danger mt-3">Add Product</button>
  </div>
  
  
</form>
</div>
@endsection