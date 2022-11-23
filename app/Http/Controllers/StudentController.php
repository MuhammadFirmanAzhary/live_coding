<?php

namespace App\Http\Controllers;

use App\Models\User;

Use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
public function index()
{
    $students = Student::all();
    return view('index',compact('students'));
}
}
