<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';


    public function district()
    {
        return $this->hasOne(District::class);
    }

    public function students()
    {
        $this->hasMany(Student::class);
    }

}
