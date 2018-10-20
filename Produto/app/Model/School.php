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

    public function setMorningTimeIn($time)
    {
        $this->morning_time_in = $time;
    }

    public function setMorningTimeOut($time)
    {
        $this->morning_time_out = $time;
    }

    public function setAfternoonTimeIn($time)
    {
        $this->afternoon_time_in = $time;
    }

    public function setAfternoonTimeOut($time)
    {
        $this->afternoon_time_out = $time;
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function students()
    {
        $this->hasMany(Student::class);
    }

    public function insert($school)
    {
        $this->setName( $school['name'] ?? '');
        $this->setPhone($school['phone'] ?? '');
        $this->setMorningTimeIn($school['morning_time_in'] ?? '');
        $this->setMorningTimeOut($school['morning_time_out'] ?? '');
        $this->setAfternoonTimeIn($school['afternoon_time_in'] ?? '');
        $this->setAfternoonTimeOut($school['afternoon_time_out'] ?? '');
        $this->address_id = ($school['address_id'] ?? 1);
        return ($this->save($school));
    }


}
