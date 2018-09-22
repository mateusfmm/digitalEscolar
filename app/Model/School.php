<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schools';

    public function address()
    {
        $this->hasOne(Adress::class);
    }

    public function students()
    {
        $this->hasMany(Student::class);
    }


}
