<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';


    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function getStreet()
    {
        return $this->street;
    }


    public function setNumber($number)
    {
        $this->number = $number;
    }


    public function getNumber()
    {
        return $this->number;
    }

    public function setComplement($complement)
    {
        $this->complement = $complement;
    }


    public function getComplement()
    {
        return $this->complement;
    }

    public function district()
    {
        return $this->hasOne(District::class);
    }

    public function schools()
    {
        $this->hasMany(School::class);
    }


    public function students()
    {
        $this->hasMany(Student::class);
    }

    public function setAttributes($request)
    {
        $this->setStreet( $request->post('street') ?? '');
        $this->setNumber($request->post('number') ?? '');
        $this->setComplement($request->post('complement') ?? '');
        $this->district_id = $request->post('district') ?? 1;
    }
}
