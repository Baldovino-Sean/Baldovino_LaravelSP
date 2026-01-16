@extends('layout')

@section('title', 'Add Student')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card p-4" style="width: 400px;">
        <h2 class="text-center mb-3">Add Student</h2>
        <form>
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Course:</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Year Level:</label>
                <input type="text" class="form-control">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Add Student</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
