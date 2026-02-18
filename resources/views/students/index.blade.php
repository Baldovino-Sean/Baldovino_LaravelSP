@extends('layout')

@section('title', 'Student List')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-bold text-dark mb-0">Student Records</h3>
        <p class="text-muted small mb-0">Manage and view all registered students.</p>
    </div>
    <a href="{{ route('students.create') }}" class="btn btn-primary px-4">
        + Add New Student
    </a>
</div>

<div class="card overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th class="py-3 ps-4 text-secondary text-uppercase small" style="width: 30%;">Student Name</th>
                    <th class="py-3 text-secondary text-uppercase small" style="width: 25%;">Course</th>
                    <th class="py-3 text-secondary text-uppercase small" style="width: 20%;">Year Level</th>
                    <th class="py-3 text-end pe-4 text-secondary text-uppercase small">Actions</th>
                </tr>
            </thead>
            <tbody>
    @forelse($students as $student)
        <tr>
            <td class="ps-4">
                <div class="d-flex align-items-center">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 35px; height: 35px; font-size: 0.8rem;">
                        {{ substr($student->first_name, 0, 1) }}{{ substr($student->last_name, 0, 1) }}
                    </div>
                    <div>
                        <div class="fw-bold">{{ $student->first_name }} {{ $student->last_name }}</div>
                        <div class="small text-muted">{{ $student->email }}</div>
                    </div>
                </div>
            </td>
            <td>{{ $student->course }}</td>
            <td>
                <span class="badge bg-info text-dark bg-opacity-10 border border-info px-3">
                    {{ $student->year }} Year
                </span>
            </td>
            <td class="text-end pe-4">
                <x-action-button href="{{ route('students.show', $student->id) }}" type="view">
                    View
                </x-action-button>

                <x-action-button href="{{ route('students.edit', $student->id) }}" type="edit">
                    Edit
                </x-action-button>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center py-5 text-muted">
                No students found. Click "+ Add New Student" to get started!
            </td>
        </tr>
    @endforelse
</tbody>
        </table>
    </div>
</div>
@endsection