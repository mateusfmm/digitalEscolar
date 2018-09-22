<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schools';


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name ;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }


    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function students()
    {
        $this->hasMany(Student::class);
    }

    public function setAttributes(Request $request)
    {
    }


}
