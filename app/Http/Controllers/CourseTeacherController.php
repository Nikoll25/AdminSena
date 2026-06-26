<?php

namespace App\Http\Controllers;
use App\Models\course_teacher;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Http\Request;
class CourseTeacherController extends Controller
{
 public function create()
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        
        return view('CourseTeacher.create', compact('teachers', 'courses'));
    }

    public function store(Request $request){

    Course_teacher::create($request->all());    }
    }

