<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/students', function () {
    return view('students.index');
})->name('students.index');


Route::get('/students/create', function () {
    return view('students.create');
})->name('students.create');


Route::get('/students/{id}', function ($id) {
   
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

 
    if (!array_key_exists($id, $students)) {
        abort(404);
    }

    $student = $students[$id];

  
    return view('students.show', compact('student'));
})->name('students.show');


Route::get('/students/{id}/edit', function ($id) {
 
    $students = [
        1 => [
            'name' => 'Maia more de ali',
            'email' => 'maia@example.com',
            'course' => 'BSCS',
            'year' => '3rd Year',
            'year_val' => '3' 
        ],
        2 => [
            'name' => 'Sean Baldovino',
            'email' => 'sean@example.com',
            'course' => 'BSIT',
            'year' => '2nd Year',
            'year_val' => '2'
        ]
    ];

    if (!array_key_exists($id, $students)) {
        abort(404);
    }

    $student = $students[$id];

    return view('students.edit', compact('student'));
})->name('students.edit');