<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

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

    public function setSchool(School $school)
    {
        $this->school = $school;
    }

    public function setAddress(School $school)
    {
        $this->school = $school;
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function insert($student)
    {
        $this->setName( $student['name'] ?? '');
        $this->setPhone($student['phone'] ?? '');
        $this->school_id = ($student['school_id'] ?? 1);
        $this->address_id = ($student['address_id'] ?? 1);
        return ($this->save($student));
    }
}
