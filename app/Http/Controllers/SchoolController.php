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
        $data['states'] = State::all();

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
    public function getAllSchools()
    {
        $data['schools'] = School::all();
        return view('schools.list',$data);
    }
}
