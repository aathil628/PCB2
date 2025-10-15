<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
   
    public function course_detail($id){
        $course = Course::findOrFail($id);
        return view('course-details', compact('course'));
    }

}
