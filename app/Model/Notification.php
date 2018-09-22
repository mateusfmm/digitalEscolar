<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';

    private $name;

    private $phone;

    public $notification_content;

    public $flg_read;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone() : string
    {
        return $this->phone;
    }

    public function mailer_user()
    {
        $this->hasOne(User::class);
    }

    public function receiver_user()
    {
        $this->hasOne(User::class);
    }
}
