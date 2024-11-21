@extends('layout')
@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Welcome to My Application</h1>
  <p class="lead">Simplify your life with our innovative solutions</p>
  <a href="{{ route('registration') }}" class="btn btn-light btn-lg">Get Started</a>
</div>

<!-- Features Section -->
<div class="container my-5">
  <div class="row text-center">
    <div class="col-md-4">
      <div class="card shadow-sm p-4 border-0">
        <i class="bi bi-speedometer2 fs-1 text-primary"></i>
        <h3 class="my-3">Fast and Reliable</h3>
        <p>Experience lightning-fast performance with our system, built for reliability and efficiency.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm p-4 border-0">
        <i class="bi bi-shield-check fs-1 text-primary"></i>
        <h3 class="my-3">Secure</h3>
        <p>We prioritize your security with cutting-edge encryption and safe practices.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm p-4 border-0">
        <i class="bi bi-people fs-1 text-primary"></i>
        <h3 class="my-3">User-Friendly</h3>
        <p>Designed with you in mind, our interface is intuitive and easy to use.</p>
      </div>
    </div>
  </div>
</div>

<!-- Call to Action Section -->
<div class="container-fluid bg-secondary text-white text-center py-5">
  <h2>Ready to Join?</h2>
  <p>Sign up today and start your journey with us!</p>
  <a href="{{ route('registration') }}" class="btn btn-primary btn-lg">Register Now</a>
</div>



@endsection
