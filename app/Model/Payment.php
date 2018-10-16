<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Payment extends Model
{
    protected $table = 'payments';

    public function payer()
    {
        return $this->belongsTo(Student::class);
    }

    public function getPaymentsByPeriod(Carbon $start, Carbon $end)
    {
        return DB::table($this->table)->select()->whereBetween('payment_date', [$start->toDateString(), $end->toDateString()])->get();
    }


}
