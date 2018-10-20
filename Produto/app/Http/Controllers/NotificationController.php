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
            $id = $this->model->buildNotifications($notification, $userId);
            event(new NotificationEvent($id,$notification));

        }

            $data['success'] = true;
            return view('notifications.create',$data);


    }

    public function getNotificationById($id)
    {
        $notification = Notification::find($id);

        $data['name'] = $notification->name;
        $data['content'] = $notification->notification_content;

        return view('notifications.notification',$data);
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
