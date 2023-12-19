@extends('layouts.app')
@section('title', 'Product List')
@section('content')
    
<div class="content-list">    
<h1 class = "display-4 bg-success mb-5 text-white">Product Selling page</h1>
    <table class="table table-primary table hover">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>

        </tr>
        @foreach($products as $product)
        <tr>
            
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            
            <td><a href="{{route('product.edit',$product->id)}}"><button class ="btn btn-danger">Edit</button></a></td>
            

        </tr>
        @endforeach
    </table>
</div>
    
    
    <script> src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"</script>
@endsection