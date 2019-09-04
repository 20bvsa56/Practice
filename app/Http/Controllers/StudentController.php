<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('student');
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'roll' => $request->roll,
            'class' => $request->class
        ]);
    }
}

