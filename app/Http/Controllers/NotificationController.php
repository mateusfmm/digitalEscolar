<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Notification;

class NotificationController extends Controller
{
    private $model;
    private $users;

    public function __construct()
    {
        $this->model = new Notification();
        $this->users = User::all();
    }

    public function create(Request $request)
    {
        $data['users'] = $this->users;

        if($request->isMethod('get')) {
            return view('notifications.create',$data);
        }

        $recipentUsersId = $request->post('users');

        foreach ($recipentUsersId as $userId) {
            
        }


    }
    public function getAllNotifications()
    {
        $data['notifications'] = Notification::all();
        return view('notifications.notifications',$data);
    }
}
