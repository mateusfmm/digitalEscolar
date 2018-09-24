<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Notification;
use App\Events\NotificationEvent;
use Mockery\Matcher\Not;

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

        if ($request->isMethod('get')) {
            return view('notifications.create', $data);
        }

        $notification = [
            'name' => $request->post('name'),
            'content' => $request->post('content')
        ];

        $receiverUsersId = $request->post('users');
        foreach ($receiverUsersId as $userId) {
            event(new NotificationEvent($userId,$notification['content']));
            $this->model->buildNotifications($notification, $userId);
        }

        if (Notification::insert($this->model->notifications)) {
            $data['success'] = true;
            return view('notifications.create',$data);
        }

    }

    public function getAllNotifications()
    {
        $data['notifications'] = Notification::all();
        return view('notifications.list', $data);
    }

    public function delete($id)
    {
        $notification = Notification::Find($id);
        $notification->delete();
        $data['notifications'] = Notification::all();
        $data['success'] = true;
        return view('notifications.list', $data);
    }
}
