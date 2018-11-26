<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(CategoryprofilesTableSeeder::class);


        // // $this->call(PlaysTableSeeder::class);
    }
}
