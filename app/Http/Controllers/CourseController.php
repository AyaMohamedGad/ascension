<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Flashy;
use Validator;

class CourseController extends Controller
{
    public function index(){
        $header = (object)[
            'icon' => 'fa fa-calendar',
            'name' => "Courses' Time",
        ];
        $courses = Course::all();
        $actions = [
            (object)[
                'name' => 'Edit',
                'tooltip' => 'Edit Course Time',
                'color' => (object)[
                    'type' => 'class',
                    'value' => 'blue'
                ],
                'link' => route('EditCourse', '%d'),
                'icon' => (object)[
                    'type' => 'class',
                    'value' => 'ace-icon fa fa-pencil bigger-150'
                ]
            ]
        ];
        $columns[] = (object)[
            'name' => 'id',
            'lang' => 'all',
            'search' => false,
            'displayName' => 'ID',
            'display' => true
        ];
        $columns[] = (object)[
            'name' => 'name',
            'lang' => 'all',
            'search' => true,
            'displayName' => 'Course Name',
            'display' => true
        ];
        $columns[] = (object)[
            'name' => 'reg',
            'lang' => 'all',
            'search' => true,
            'displayName' => 'REG',
            'display' => true
        ];
        $columns[] = (object)[
            'name' => 'far',
            'lang' => 'all',
            'search' => true,
            'displayName' => 'FAR',
            'display' => true
        ];
        $columns[] = (object)[
            'name' => 'actions',
            'lang' => 'all',
            'search' => false,
            'displayName' => 'Actions',
            'display' => true
        ];
        $table = (object)[
            'columns' => collect($columns),
            'data' => $courses
        ];
        return view('admin.courses.index', compact('header', 'table', 'actions'));
    }

    public function edit($id){
        $course = Course::find($id);
        return view('admin.courses.edit', compact('course'));
    }

    public function update($id, Request $request){
        $validator = Validator::make($request->all(), [
            'reg' => 'required|date',
            'far' => 'required|date|after:reg',
        ]);

        if ($validator->fails()) {
            return redirect()->route('EditCourse', $id)->withErrors($validator)->withInput();
        }

        $course = Course::find($id);
        $course->reg = $request->reg;
        $course->far = $request->far;
        $course->update();

        Flashy::success('Course Updated Successfully.');
        return redirect()->route('CoursesIndex');
    }

}
