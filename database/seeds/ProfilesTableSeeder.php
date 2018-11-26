<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => 1,
            'score' => 0,
            'rank' => 0,
            'avatar' => 'avatar1',
        ]);

        DB::table('profiles')->insert([
            'user_id' => 2,
            'score' => 0,
            'rank' => 0,
            'avatar' => 'avatar2',
        ]);

        // DB::table('profiles')->insert([
        //     'user_id' => 3,
        //     'score' => 10,
        //     'rank' => 4,
        //     'avatar' => 'avatar3',
        // ]);
    }
}
