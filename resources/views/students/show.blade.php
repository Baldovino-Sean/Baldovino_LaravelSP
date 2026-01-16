@extends('layout')

@section('title', 'Student Profile')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card p-4" style="width: 400px;">
        <h2 class="text-center mb-3">Student Profile</h2>
        <p><strong>Name:</strong> Sean Baldovino</p>
        <p><strong>Email:</strong> neasonivodlab@gmail.com</p>
        <p><strong>Course:</strong> BSIT</p>
        <p><strong>Year Level:</strong> 2nd Year</p>
        <a href="{{ route('students.index') }}" class="btn btn-secondary w-100 mt-3">Back to Student List</a>
    </div>
</div>
@endsection
