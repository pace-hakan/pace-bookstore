<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Lord Valdemort',
            'email' => 'valde@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => 'Obi Wan Kenobi',
            'email' => 'obi@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => 'Ray Tango',
            'email' => 'ray@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => 'Lionel Messi',
            'email' => 'messi@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => 'Tom Cruise',
            'email' => 'tom@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => 'Pace Creative',
            'email' => 'pace@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
