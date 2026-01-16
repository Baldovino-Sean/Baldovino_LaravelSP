@extends('layout')

@section('title', 'Welcome')

@section('content')
<div class="text-center mt-5">
    <h1>Welcome to the Student Portal</h1>
    <p>This system allows you to manage student information such as viewing, adding, and editing student records.</p>
    <a href="{{ route('students.index') }}" class="btn btn-primary mt-3">Go to Student List</a>
</div>
@endsection
