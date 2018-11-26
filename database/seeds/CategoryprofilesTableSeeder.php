<?php

use Illuminate\Database\Seeder;

class CategoryprofilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoryprofiles')->insert([
            'user_id' => 1,
            'category_id'=> 1,
           
            
        ]);
        DB::table('categoryprofiles')->insert([
            'user_id' => 1,
            'category_id'=>2,
            
           
        ]);
        DB::table('categoryprofiles')->insert([
            'user_id' => 1,
            'category_id'=>3,
            
            
        ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 1,
        //     'category_id'=>4,
        //     'score' => 0,
        //     'rank' => 0,
           
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 1,
        //     'category_id'=>5,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 1,
        //     'category_id'=>6,
            
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 1,
        //     'category_id'=>7,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);

        DB::table('categoryprofiles')->insert([
            'user_id' => 2,
            'category_id'=> 1,
            'score' => 0,
            'rank' => 0,
            
        ]);
        DB::table('categoryprofiles')->insert([
            'user_id' => 2,
            'category_id'=> 2,
            'score' => 0,
            'rank' => 0,
            
        ]);
        DB::table('categoryprofiles')->insert([
            'user_id' => 2,
            'category_id'=>3,
            'score' => 0,
            'rank' => 0,
            
        ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 2,
        //     'category_id'=>4,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 2,
        //     'category_id'=>5,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 2,
        //     'category_id'=>6,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 2,
        //     'category_id'=>7,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);

        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 3,
        //     'category_id'=> 1,
        //     'score' => 10,
        //     'rank' => 4,
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 3,
        //     'category_id'=> 2,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 3,
        //     'category_id'=>3,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 3,
        //     'category_id'=>4,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 3,
        //     'category_id'=>5,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 3,
        //     'category_id'=>6,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);
        // DB::table('categoryprofiles')->insert([
        //     'user_id' => 3,
        //     'category_id'=>7,
        //     'score' => 0,
        //     'rank' => 0,
            
        // ]);
    }
}
