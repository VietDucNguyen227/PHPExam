<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{

    public function index()
    {
        $students = student::latest()->paginate(5);
        return view('students.index', compact('students'))->with('i',
            (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('students.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'telephone' => 'required',
        ]);

        student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Created Successfully.');
    }


    public function show(student $student)
    {
        return view('students.show', compact('student'));
    }


    public function edit(student $student)
    {
        return view('students.edit', compact('student'));
    }


    public function update(Request $request, student $student)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'telephone' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Updated Successfully');
    }


    public function destroy(student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Delete Successfully.');
    }
}
