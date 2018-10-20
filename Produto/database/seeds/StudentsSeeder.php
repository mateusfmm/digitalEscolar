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
            'name' => 'Leureta Neto',
            'phone' => '985232310',
            'address_id' => 1,
            'school_id' => 1
        ];

        $students[] = [
            'name' => 'Matheus Rocha',
            'phone' => '985232310',
            'address_id' => 1,
            'school_id' => 1
        ];
        $students[] = [
            'name' => 'Elena Vasconcelos',
            'phone' => '985232310',
            'address_id' => 1,
            'school_id' => 1
        ];

        DB::table('students')->insert($students);
    }
}
