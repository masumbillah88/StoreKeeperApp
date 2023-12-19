

    <!-- resources/views/sales/index.blade.php -->
@extends('layouts.app')
@section('title', 'Sell Product')

@section('content')

    <div class="container">
        <h2>Sell a Product</h2>
        
        <!-- Display validation errors if any -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Display success message if any -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Sales Form -->
        <form method="POST" action="{{ route('sale.store') }}">
            @csrf

            <!-- Product Selection -->
            <div class="form-group">
                <label for="product_id">Select Product:</label>
                <select name="product_id" class="form-control" required>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} - ${{ $product->price }}</option>
                    @endforeach
                </select>
            </div>

            

            <!-- Quantity -->
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" class="form-control" required min="1" value="1">
            </div>

            <!-- Unit Price -->
            <div class="form-group">
                <label for="unit_price">Unit Price:</label>
                <input type="number" name="price" class="form-control" required step="0.01" min="0.01" value = "">
            </div>

            <!-- Sale Date -->
            <!-- <div class="form-group">
                <label for="sale_date">Sale Date:</label>
                <input type="date" name="sale_date" class="form-control" required>
            </div> -->

            

            

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Sell Product</button>
        </form>
    </div>
    @endsection

