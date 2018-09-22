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

        if($request->isMethod('get')) {
            $data['schools'] = School::all();
            $data['states'] = State::all();
            $data['districts'] = District::all();
            return view('students_create',$data);
        }

        $schoolId = $request->post('school');

        $address = new Address();
        $address->setAttributes($request);
        $this->model->address()->save($address);

        $school = School::find($schoolId);
        $this->model->school()->save($school);

        $students = [
            'name' => $request->post('name'),
            'phone' =>  $request->post('phone')
        ];

        $this->model->insert($students);



        dd($request);
    }

    public function getAllStudents()
    {
        $data['students'] = Student::all();
        return view('students',$data);
    }




}
