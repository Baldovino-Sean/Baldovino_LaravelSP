@extends('layout')

@section('title', 'Welcome')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 60vh;">
    <div class="col-md-8 text-center">
        <div class="p-5 bg-white rounded-3 shadow-sm border">
            <div class="mb-4 text-primary" style="font-size: 3rem;">
                🎓
            </div>
            
            <h1 class="display-5 fw-bold text-dark mb-3">Welcome to the Student Portal</h1>
            
            <p class="lead text-muted mb-4">
                This system allows you to efficiently manage student records. 
                Easily view, add, edit, and organize student information in one secure place.
            </p>
            
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg px-4 gap-3">
                    View Student List
                </a>
                <a href="{{ route('students.create') }}" class="btn btn-outline-secondary btn-lg px-4">
                    Add New Student
                </a>
            </div>
        </div>
    </div>
</div>
@endsection