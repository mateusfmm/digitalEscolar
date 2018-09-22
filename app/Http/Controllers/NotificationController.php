<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Notification;

class NotificationController extends Controller
{

    public function create(Request $request)
    {

        if($request->isMethod('get')) {
            $data['users'] = User::all();
            return view('notifications.create',$data);
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
    public function getAllNotifications()
    {
        $data['notifications'] = Notification::all();
        return view('notifications.notifications',$data);
    }
}
