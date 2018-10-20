<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments[] = [
            'value' => '150',
            'payment_date' => '2018-03-15 00:00:00',
            'expiration_date' => '2018-03-10 00:00:00',
            'payer_id' => 14,
            'driver_id' => 1,
            'flg_late' => 1
        ];

        $payments[] = [
            'value' => '190',
            'payment_date' => '2018-04-05 00:00:00',
            'expiration_date' => '2018-04-10 00:00:00',
            'payer_id' => 13,
            'driver_id' => 1,
            'flg_late' => 0
        ];

        $payments[] = [
            'value' => '230',
            'payment_date' => '2018-07-02 00:00:00',
            'expiration_date' => '2018-05-10 00:00:00',
            'payer_id' => 15,
            'driver_id' => 1,
            'flg_late' => 0
        ];

        $payments[] = [
            'value' => '95',
            'payment_date' => '2018-04-15 00:00:00',
            'expiration_date' => '2018-04-10 00:00:00',
            'payer_id' => 3,
            'driver_id' => 1,
            'flg_late' => 1
        ];

        $payments[] = [
            'value' => '210',
            'payment_date' => '2018-05-05 00:00:00',
            'expiration_date' => '2018-05-10 00:00:00',
            'payer_id' => 2,
            'driver_id' => 1,
            'flg_late' => 0
        ];

        $payments[] = [
            'value' => '230',
            'payment_date' => '2018-06-02 00:00:00',
            'expiration_date' => '2018-06-10 00:00:00',
            'payer_id' => 2,
            'driver_id' => 1,
            'flg_late' => 0
        ];


        $payments[] = [
            'value' => '95',
            'payment_date' => '2018-07-15 00:00:00',
            'expiration_date' => '2018-07-10 00:00:00',
            'payer_id' => 3,
            'driver_id' => 1,
            'flg_late' => 1
        ];

        $payments[] = [
            'value' => '210',
            'payment_date' => '2018-08-05 00:00:00',
            'expiration_date' => '2018-08-10 00:00:00',
            'payer_id' => 13,
            'driver_id' => 1,
            'flg_late' => 0
        ];

        $payments[] = [
            'value' => '230',
            'payment_date' => '2018-08-02 00:00:00',
            'expiration_date' => '2018-07-10 00:00:00',
            'payer_id' => 2,
            'driver_id' => 1,
            'flg_late' => 0
        ];


        DB::table('payments')->insert($payments);

    }
}
