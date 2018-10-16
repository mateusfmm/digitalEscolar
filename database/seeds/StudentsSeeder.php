<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students[] = [
            'name' => 'Rafael Braga',
            'phone' => '985232310',
            'address_id' => 1,
            'school_id' => 1
        ];

        $students[] = [
            'name' => 'Cynthia Luz',
            'phone' => '985232310',
            'address_id' => 1,
            'school_id' => 1
        ];
        $students[] = [
            'name' => 'Ronaldo Neto',
            'phone' => '985232310',
            'address_id' => 1,
            'school_id' => 1
        ];

        $students[] = [
            'name' => 'Rafael Braga',
            'phone' => '985232310',
            'address_id' => 1,
            'school_id' => 1
        ];

        $students[] = [
            'name' => 'Cynthia Luz',
            'phone' => '985232310',
            'address_id' => 1,
            'school_id' => 1
        ];
        $students[] = [
            'name' => 'Ronaldo Neto',
            'phone' => '985232310',
            'address_id' => 1,
            'school_id' => 1
        ];

        DB::table('students')->insert($students);
    }
}
