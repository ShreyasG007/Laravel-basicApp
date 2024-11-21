@extends('layout')
@section('title', 'Upload File')
@section('content')
<div class="container mt-5">
    <h2>Upload a File</h2>
    <form action="{{ route('upload.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload your File</label>
            <input class="form-control" name="file" type="file" id="formFile" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
