@extends('layout')

@section('title', 'Student List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Student List</h2>
    <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Sample static data -->
        <tr>
            <td>Maia more de ali</td>
            <td>BSCS</td>
            <td>3rd Year</td>
            <td>
                <a href="{{ route('students.show', 1) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('students.edit', 1) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Sean Baldovino</td>
            <td>BSIT</td>
            <td>2nd Year</td>
            <td>
                <a href="{{ route('students.show', 2) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('students.edit', 2) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
