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

Route::get('/students/{id}', function () {
    return view('students.show');
})->name('students.show');

Route::get('/students/{id}/edit', function () {
    return view('students.edit');
})->name('students.edit');
