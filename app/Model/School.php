<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schools';

    public $name;

    public $phone;

    public $morning_time_in;

    public $morning_time_out;

    public $afternoon_time_in;

    public $afternoon_time_out;

    public function address()
    {
        $this->hasOne(Adress::class);
    }


}
