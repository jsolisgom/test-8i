<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::with('category')->get();
        return view('courses.index', compact('courses'));
    }

    public function show($id){
        $user = Auth::user();
        $course = Course::where('id', $id)->with('category')->first(); 
        $hasCourse = ( $user->courses()->where('courses.id', $id)->get()->isEmpty() ) ? false : true;

        return view('courses.show', compact('course', 'hasCourse'));
    }

    public function store(Request $request){
        $user = Auth::user();
        $courseId = $request->id;
        $user->courses()->attach($courseId);

        return redirect()->back()->with('success', 'Curso comprado correctamente');
    }
}
