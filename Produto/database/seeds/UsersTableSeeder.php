<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users[] = [
            'name' => 'Julia',
            'email' => 'juc.amarante@gmail.com',
            'password' => bcrypt('senha')
        ];

        $users[] = [
            'name' => 'Rafael',
            'email' => 'rafa@gmail.com',
            'password' => bcrypt('senha')
        ];

        DB::table('users')->insert($users);
    }
}
