<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Notification;

class NotificationController extends Controller
{
    public function getAllNotifications()
    {
        $data['notifications'] = Notification::all();
        return view('notifications',$data);
    }
}
