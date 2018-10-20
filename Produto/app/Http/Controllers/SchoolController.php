<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\School;
use App\Model\State;
use App\Model\Address;


class SchoolController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new School();
    }

    public function create(Request $request)
    {
        $data['states'] = [];

        foreach(State::all() as $state){
            $data['states'][$state->id] = $state->name;
        }

        if($request->isMethod('get')) {
            return view('schools.create',$data);
        }

        $address = new Address();
        $address->setAttributes($request);
        $address->save();
        $addressId = $address->id;

        $schools = [
            'name' =>  $request->post('name'),
            'phone' =>  $request->post('phone'),
            'morning_time_in' => $request->post('morning_time_in'),
            'morning_time_out' => $request->post('morning_time_out'),
            'afternoon_time_in' => $request->post('afternoon_time_in'),
            'afternoon_time_out' => $request->post('afternoon_time_out'),
            'address_id' => $addressId,
        ];

        if($this->model->insert($schools)){
            $data['success'] = true;
            return view('schools.create',$data);
        }


    }

    public function edit(Request $request,$id)
    {
        $school = School::Find($id);

        $data['states'] = [];
        $data['school'] = $school;

        foreach(State::all() as $state){
            $data['states'][$state->id] = $state->name;
        }

        if ($request->isMethod('get')){
            return view('schools.edit',$data);
        }



        if ($school->save()){
            $data['success'] = true;
            return view('students.edit',$data);
        }
    }

    public function delete($id)
    {
        $school = School::Find($id);
        $school->delete();


        $data['schools'] = School::all();
        $data['success'] = true;
        return view('schools.list', $data);
    }
    public function getAllSchools()
    {
        $data['schools'] = School::all();
        return view('schools.list',$data);
    }
}
