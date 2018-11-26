<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ram',
            'email' => 'pawanacharya0123'.'@gmail.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' =>'Shyam',
            'email' => 'shyam'.'@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // DB::table('users')->insert([
        //     'name' => 'Hari',
        //     'email' => str_random(10).'@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);
    }
}
