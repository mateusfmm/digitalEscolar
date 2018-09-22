<?php

namespace App\Http\Controllers;

use App\Model\Address;
use App\Model\District;
use App\Model\School;
use App\Model\State;
use Illuminate\Http\Request;
use App\Model\Student;

class StudentController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Student();
    }

    public function create(Request $request)
    {
        $data['schools'] = School::all();
        $data['states'] = State::all();
        $data['districts'] = District::all();

        if($request->isMethod('get')) {
            return view('students.create',$data);
        }

        $address = new Address();
        $address->setAttributes($request);
        $address->save();
        $adressId = $address->id;

        $students = [
            'name' =>  $request->post('name'),
            'phone' =>  $request->post('phone'),
            'school_id' => $request->post('school_id'),
            'address_id' => $adressId,
        ];

        if($this->model->insert($students)){
            $data['success'] = true;
            return view('students.create',$data);
        }

    }

    public function edit(Request $request,$id)
    {
        $student = Student::Find($id);
        $data['schools'] = School::all();
        $data['states'] = State::all();
        $data['student'] = $student;

        if ($request->isMethod('get')){
            return view('students.edit',$data);
        }

        if(!empty($request->post('name'))) {
            $student->setName($request->post('name'));
        }

        if(!empty($request->post('phone'))){
            $student->setPhone($request->post('phone'));
        }

        if ($student->save()){
            $data['success'] = true;
            return view('students.edit',$data);
        }
    }

    public function getAllStudents()
    {
        $data['students'] = Student::all();
        return view('students.students',$data);
    }

}
