<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public $name;

    public $phone;

    public function address()
    {
        $this->hasOne(Adress::class);
    }

    public function school()
    {
        $this->hasOne(School::class);
    }
}
