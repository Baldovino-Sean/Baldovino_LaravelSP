@extends('layout')

@section('title', 'Add Student')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card p-4" style="width: 400px;">
        <h2 class="text-center mb-3">Add Student</h2>
        <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="first_name" class="form-control" placeholder="First Name">
    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
    <input type="email" name="email" class="form-control" placeholder="Email">
    <input type="text" name="course" class="form-control" placeholder="Course">
    <input type="number" name="year" class="form-control" placeholder="Year Level">
    
    <button type="submit" class="btn btn-primary">Add Student</button>
</form>
    </div>
</div>
@endsection
