<?php

namespace App\Model;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';

    public $notifications = [];

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName() : string
    {
        return $this->name;
    }

    public function setContent($content)
    {
        $this->notification_content = $content;
    }

    public function getContent($content)
    {
        return $this->notification_content;
    }

    public function setReceiver($userId)
    {
        $this->receiver_user_id = $userId;
    }

    public function setMailer($userId)
    {
        $this->mailer_user_id = $userId;
    }

    public function mailer_user()
    {
        return $this->belongsTo(User::class);
    }

    public function receiver_user()
    {
        return $this->belongsTo(User::class);
    }

    public function buildNotifications($notification, $receiver)
    {
        $not = new Notification();
        $not->name = $notification['name'];
        $not->notification_content = $notification['content'];
        $not->mailer_user_id = Auth::user()->id;
        $not->receiver_user_id = $receiver;
        $not->flg_read = 0;
        $not->save();

        return $not->id;
    }
}
