@extends('layout')

@section('title', 'Forget Password')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; padding: 20px;">
    <div class="card" style="width: 100%; max-width: 400px; padding: 20px;">
        <h2 class="text-center mb-4">Forgot Password</h2>
        <p class="text-center mb-4">Enter your email address to receive a password reset link.</p>
        
        
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if(session()->has('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('forgetPassword.post') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

@endsection
