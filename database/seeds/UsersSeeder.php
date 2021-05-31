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
            'name' => 'Landum',
            'email' => 'landum@gmail.com',
            'avatar' => 'user1.png',
            'password' => bcrypt('landum'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Obi Wan Kenobi',
            'email' => 'obi@gmail.com',
            'avatar' => 'user2.png',
            'password' => bcrypt('secret'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Pace Creative',
            'email' => 'pace@gmail.com',
            'avatar' => 'user3.png',
            'password' => bcrypt('secret'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Lord Valdemort',
            'email' => 'valde@gmail.com',
            'avatar' => 'user4.png',
            'password' => bcrypt('secret'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
