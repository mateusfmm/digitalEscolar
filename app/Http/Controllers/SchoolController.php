<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\School;
use App\Model\State;


class SchoolController extends Controller
{
    public function create(Request $request)
    {
        if($request->isMethod('get')) {
            $data['schools'] = School::all();
            $data['states'] = State::all();
           // return view('students_create',$data);
        }
    }
    public function getAllSchools()
    {
        $data['schools'] = School::all();
        return view('schools',$data);
    }
}
