@extends('layout')
@section('title', 'Registration')
@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow" style="width: 500px; padding: 30px; border-radius: 8px;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h2 class="text-center mb-4">Registration Form</h2>

        <form action="{{ route('registration.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                    value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                    value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"
                    required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number (Optional)</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number"
                    value="{{ old('phone') }}">
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>
</div>

@endsection
