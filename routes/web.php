<?php

use Illuminate\Support\Facades\Route;

// 1. Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Student List Page
Route::get('/students', function () {
    return view('students.index');
})->name('students.index');

// 3. Add Student Page
Route::get('/students/create', function () {
    return view('students.create');
})->name('students.create');

// 4. View Student Page (Dynamic Simulation)
Route::get('/students/{id}', function ($id) {
    // Simulated Database
    $students = [
        1 => [
            'name' => 'Maia more de ali',
            'email' => 'maia@example.com',
            'course' => 'BSCS',
            'year' => '3rd Year',
            'initials' => 'MM'
        ],
        2 => [
            'name' => 'Sean Baldovino',
            'email' => 'sean@example.com',
            'course' => 'BSIT',
            'year' => '2nd Year',
            'initials' => 'SB'
        ]
    ];

    // Check if student exists, if not, show 404
    if (!array_key_exists($id, $students)) {
        abort(404);
    }

    $student = $students[$id];

    // Pass data to the view
    return view('students.show', compact('student'));
})->name('students.show');

// 5. Edit Student Page (Dynamic Simulation)
Route::get('/students/{id}/edit', function ($id) {
    // Same Simulated Database so Edit page shows correct name
    $students = [
        1 => [
            'name' => 'Maia more de ali',
            'email' => 'maia@example.com',
            'course' => 'BSCS',
            'year' => '3rd Year',
            'year_val' => '3' // Value for the dropdown
        ],
        2 => [
            'name' => 'Sean Baldovino',
            'email' => 'sean@example.com',
            'course' => 'BSIT',
            'year' => '2nd Year',
            'year_val' => '2' // Value for the dropdown
        ]
    ];

    if (!array_key_exists($id, $students)) {
        abort(404);
    }

    $student = $students[$id];

    return view('students.edit', compact('student'));
})->name('students.edit');