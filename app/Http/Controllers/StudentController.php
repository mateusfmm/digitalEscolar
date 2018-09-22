<?php

namespace App\Http\Controllers;

use App\Model\District;
use App\Model\School;
use App\Model\State;
use Illuminate\Http\Request;
use App\Model\Student;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        if($request->isMethod('get'))
        {
            $data['schools'] = School::all();
            $data['states'] = State::all();
            $data['districts'] = District::all();
            return view('students_create',$data);
        }
        dd($request);
    }

    public function getAllStudents()
    {
        $data['students'] = Student::all();
        return view('students',$data);
    }




}
