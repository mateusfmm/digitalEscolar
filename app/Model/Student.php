<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
