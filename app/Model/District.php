<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\State;

class District extends Model
{
    protected $table = 'districts';

    public function state()
    {
        return $this->hasOne(State::class);
    }

}
