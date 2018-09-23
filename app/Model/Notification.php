<?php

namespace App\Model;

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
        $this->notifications[] = [
            'name' => $notification['name'],
            'notification_content' => $notification['content'],
            'mailer_user_id' => 1,
            'receiver_user_id' => $receiver,
            'flg_read' => 0
        ];
    }
}
