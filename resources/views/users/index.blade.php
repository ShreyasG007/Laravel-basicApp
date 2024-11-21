@extends('layout')

@section('title', 'User List')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">User List</h2>

    <!-- Check if there are any users -->
    @if ($users->isEmpty())
        <p class="text-center">No users found.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
