@extends('layout')
@section('title', 'Home')

@section('content')


<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Welcome to My Application</h1>
  <p class="lead">Simplify your life with our innovative solutions</p>
  <a href="{{ route('product') }}" class="btn btn-light btn-lg">Get Started</a>
</div>
@endsection