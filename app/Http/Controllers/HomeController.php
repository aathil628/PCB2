<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Course;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Fetching all course
    public function index(){
        $courses = Course::all();
        return view('index2', compact('courses'));
    }
    
    public function index2()
    {
        return view('index');
    }
    public function index3()
    {
        return view('index3');
    }
    public function index_one_page()
    {
        return view('index-one-page');
    }
    public function index2_one_page()
    {
        return view('index2-one-page');
    }
    public function index3_one_page()
    {
        return view('index3-one-page');
    }
    public function index_dark()
    {
        return view('index-dark');
    }
    public function home(){
        return view('pages\home');
    }
}
