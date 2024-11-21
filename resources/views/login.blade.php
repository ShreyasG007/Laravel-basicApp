@extends('layout')
@section('title', 'Login')
@section('content')

<div class="d-flex justify-content-center align-items-center" 
    style="min-height: 100vh; background: url('{{ asset('images/login-bg.jpg') }}') no-repeat center center; background-size: cover;">
    
    <div class="card shadow" style="width: 400px; padding: 20px; border-radius: 8px; background-color: rgba(255, 255, 255, 0.9);">
        
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <h2 class="text-center mb-4">Login</h2>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>

@endsection
