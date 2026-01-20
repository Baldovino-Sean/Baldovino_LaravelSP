@extends('layout')

@section('title', 'Student Profile')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        
        <div class="card shadow-sm border-0 mt-4">
            <div class="card-header text-white text-center py-4" style="background-color: var(--primary-color);">
                
                <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm" 
                     style="width: 80px; height: 80px; color: var(--primary-color); font-size: 2rem; font-weight: bold;">
                    {{ $student['initials'] }}
                </div>
                
                <h3 class="mb-0 fs-4">{{ $student['name'] }}</h3>
                <span class="badge bg-light text-dark mt-2">{{ $student['course'] }} Student</span>
            </div>

            <div class="card-body p-4">
                <h5 class="text-muted border-bottom pb-2 mb-3 text-uppercase small ls-1">Student Details</h5>
                
                <div class="mb-3">
                    <label class="small text-muted fw-bold">Email Address</label>
                    <p class="fs-5 text-dark">{{ $student['email'] }}</p>
                </div>

                <div class="mb-3">
                    <label class="small text-muted fw-bold">Current Course</label>
                    <p class="fs-5 text-dark">{{ $student['course'] }}</p>
                </div>

                <div class="mb-3">
                    <label class="small text-muted fw-bold">Year Level</label>
                    <p class="fs-5 text-dark">{{ $student['year'] }}</p>
                </div>

                <a href="{{ route('students.index') }}" class="btn btn-outline-secondary w-100 mt-3">
                    ← Back to Student List
                </a>
            </div>
        </div>

    </div>
</div>
@endsection