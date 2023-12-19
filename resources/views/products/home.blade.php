@extends('layouts.app')
@section('title','Home')

@section('content')
@include('components.card')
@if(session('success'))
<div class = "alert alert-success">
    {{session('success')}}
</div>
@endif






@endsection