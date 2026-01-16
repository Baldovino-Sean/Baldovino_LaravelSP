@extends('layout')

@section('title', 'Edit Student')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card p-4" style="width: 400px;">
        <h2 class="text-center mb-3">Edit Student</h2>
        <form>
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" value="Juan Dela Cruz">
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" value="juan@example.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Course:</label>
                <input type="text" class="form-control" value="BSIT">
            </div>
            <div class="mb-3">
                <label class="form-label">Year Level:</label>
                <input type="text" class="form-control" value="3rd Year">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
