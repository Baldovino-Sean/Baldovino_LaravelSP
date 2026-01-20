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
                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 35px; height: 35px; font-size: 0.8rem;">
                                MM
                            </div>
                            <div>
                                <div class="fw-bold">Maia more de ali</div>
                                <div class="small text-muted">maia@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td>BSCS</td>
                    <td><span class="badge bg-info text-dark bg-opacity-10 border border-info px-3">3rd Year</span></td>
                    <td class="text-end pe-4">
                        <x-action-button href="{{ route('students.show', 1) }}" type="view">
                            View
                        </x-action-button>

                        <x-action-button href="{{ route('students.edit', 1) }}" type="edit">
                            Edit
                        </x-action-button>
                    </td>
                </tr>

                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 35px; height: 35px; font-size: 0.8rem;">
                                SB
                            </div>
                            <div>
                                <div class="fw-bold">Sean Baldovino</div>
                                <div class="small text-muted">sean@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td>BSIT</td>
                    <td><span class="badge bg-warning text-dark bg-opacity-10 border border-warning px-3">2nd Year</span></td>
                    <td class="text-end pe-4">
                        <x-action-button href="{{ route('students.show', 2) }}" type="view">
                            View
                        </x-action-button>

                        <x-action-button href="{{ route('students.edit', 2) }}" type="edit">
                            Edit
                        </x-action-button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection