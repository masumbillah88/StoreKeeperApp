@extends('layouts.app')

@section('title','Add Product')
@section('content')

    <form action="{{route('product.update',$productsArray->id)}}" method = "POST">
        @csrf
        @method('PUT') 
        <label for="Name">Name:</label>
        <input type="text" value= "{{$productsArray->name}}"name = "name" placeholder="Product Name"><br>
        <label for="quantity">Quantity:</label>
        <input type="text" value = "{{$productsArray->quantity}}" name = "quantity" placeholder="Quantity"><br>
        <label for="price">Price:</label>
        <input type="text" value = "{{$productsArray->price}}" name = "price" placeholder="Price"><br>
        <label for="description">Description:</label>
        <textarea value = "{{$productsArray->description}}"name="description" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Update">
    </form>
@endsection