@extends('layouts.app')
@section('title', 'Sales Transaction')
@section('content')
    
<div class="content-list">    
<h1 class = "display-4 bg-success mb-5 text-white">Product Selling page</h1>
    <table class="table table-primary table hover">
        <tr>
            <th>Id</th>
            <th>Product Id</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Sales Date</th>
            

        </tr>
        @foreach($sales as $sale)
        <tr>
            
            <td>{{$sale->id}}</td>
            <td>{{$sale->product_id}}</td>
            <td>{{$sale->quantity}}</td>
            <td>{{$sale->price}}</td>
            <td>{{$sale->created_at}}</td>
            
           
            

        </tr>
        @endforeach
    </table>
</div>
    
    
    <script> src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"</script>
@endsection