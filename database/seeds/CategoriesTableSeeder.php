<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Sports',
        ]);

        DB::table('categories')->insert([
            'category' => 'Science',
        ]);

        DB::table('categories')->insert([
            'category' => 'GK',
        ]);

        // DB::table('categories')->insert([
        //     'category' => 'Space',
        // ]);

        // DB::table('categories')->insert([
        //     'category' => 'TV',
        // ]);
        // DB::table('categories')->insert([
        //     'category' => str_random(10),
        // ]);
        // DB::table('categories')->insert([
        //     'category' => str_random(10),
        // ]);
    }
}
