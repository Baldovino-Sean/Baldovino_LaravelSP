<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index() {
        $students = Student::all();
        return view('students.index', compact('students'));
    }


    public function create() {
        return view('students.create');
    }


    public function store(Request $request) {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:students',
            'course' => 'required',
            'year' => 'required|integer',
        ]);

        Student::create($validated);
        return redirect()->route('students.index')->with('success', 'Student added!');
    }


    public function show($id) {
        $student = Student::findOrFail($id); 
        return view('students.show', compact('student'));
    }


    public function edit($id) {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }


    public function update(Request $request, $id) {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Updated!');
    }
}