<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'National soprts of Nepal?',
            'ans1' => 'kabadi',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'kabadi',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'Who won FIFA 2018 WC?',
            'ans1' => 'France',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'France',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'Who won FIFA 2014 WC?',
            'ans1' => 'Germany',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Germany',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'Who won FIFA 2010 WC?',
            'ans1' => 'Spain',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Spain',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'Who won 2017/18 PL?',
            'ans1' => 'ManCity',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'ManCity',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'Who won 2016/17 PL?',
            'ans1' => 'Chelsea',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Chelsea',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'Who won 2015/16 PL?',
            'ans1' => 'LC',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'LC',
            'difficulty' => 0,
        ]);

        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'UFC LW champion?',
            'ans1' => 'Khabib',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Khabib',
            'difficulty' => 1,
        ]);

        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'UFC HW champion?',
            'ans1' => 'DC',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'DC',
            'difficulty' => 1,
        ]);

        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'UFC LHW champion?',
            'ans1' => 'D C',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'D C',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'UFC FHW champion?',
            'ans1' => 'Max',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Max',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'UFC MW champion?',
            'ans1' => 'Robert',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Robert',
            'difficulty' => 1,
        ]);


        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'who won:GGG vs Canelo?',
            'ans1' => 'GGG',
            'ans2' => 'Draw',
            'ans3' => 'Canelo',
            
            'correct' => 'Canelo',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'floyd vs macgror?',
            'ans1' => 'Floyd',
            'ans2' => 'Draw',
            'ans3' => 'Macgeor',
            
            'correct' => 'Floyd',
            'difficulty' => 1,
        ]);


        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'who are called Kiwis in circet',
            'ans1' => 'Newzeland',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Newzeland',
            'difficulty' => 2,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'Aussie??',
            'ans1' => 'Australia',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Australia',
            'difficulty' => 2,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'Down under? where?',
            'ans1' => 'Australia',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Australia',
            'difficulty' => 2,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'caption of nepali circket?',
            'ans1' => 'Paras K',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Paras K',
            'difficulty' => 2,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'Who reached IPl finals most?',
            'ans1' => 'chennai',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'chennai',
            'difficulty' => 2,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'Sandip plays for ? IPL?',
            'ans1' => 'Delhi',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Delhi',
            'difficulty' => 2,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => 'who won EPL?',
            'ans1' => 'Biratnagar',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Biratnagar',
            'difficulty' => 2,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 3,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 3,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 3,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 3,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 3,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 3,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 3,
        ]);
        DB::table('questions')->insert([
            'category_id' => 1,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 3,
        ]);

        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => 'Who is honored as Father of Modern Chemistry?',
            'ans1' => 'Antoine Lavoisier',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Antoine Lavoisier',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => 'Who invented periodic table?',
            'ans1' => 'Dmitri Mendeleev',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Dmitri Mendeleev',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => ' Which gas evolved from  paddy fields and marshes?',
            'ans1' => 'Methane',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Methane',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => str_random(10),
            'ans1' => 'cherry',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'cherry',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => 'Which toxic element present in automobile exhausts?',
            'ans1' => 'Lead',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Lead',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => 'Which metal is used in the making of microchips?',
            'ans1' => 'silicon',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'silicon',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => 'Which chemical is used to make rain coats?',
            'ans1' => 'PVC',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'PVC',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => 'Which element is a liquid at ordinary temperature?',
            'ans1' => 'Mercury',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Mercury',
            'difficulty' => 0,
        ]);

        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => 'What is sodium chloride?',
            'ans1' => 'table salt',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'table salt',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => 'What is table sugar?',
            'ans1' => 'Sucrose',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Sucrose',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => 'Which gas is found in soda water?',
            'ans1' => 'Carbon dioxide',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'Carbon dioxide',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 2,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 1,
        ]);

        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => 'berrry1',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'berrry1',
            'difficulty' => 0,
        ]);


        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => 'apple2',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple2',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => 'cherry1',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'cherry1',
            'difficulty' => 0,
        ]);



        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => 'apple1',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple1',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => 'banana',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'banana',
            'difficulty' => 0,
        ]);


        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => str_random(4),
            'ans2' => 'apple',
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 0,
        ]);
        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => 'orange',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'orange',
            'difficulty' => 1,
        ]);

        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => 'apple',
            'ans2' => str_random(4),
            'ans3' => str_random(4),
            
            'correct' => 'apple',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => str_random(4),
            'ans2' => str_random(4),
            
            'ans3' => 'apple',
            'correct' => 'apple',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => str_random(4),
            'ans2' => str_random(4),
            
            'ans3' => 'apple',
            'correct' => 'apple',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => str_random(4),
            'ans2' => str_random(4),
            
            'ans3' => 'apple',
            'correct' => 'apple',
            'difficulty' => 1,
        ]);
        DB::table('questions')->insert([
            'category_id' => 3,
            'question' => str_random(10),
            'ans1' => str_random(4),
            'ans2' => str_random(4),
            
            'ans3' => 'apple',
            'correct' => 'apple',
            'difficulty' => 1,
        ]);
    }
}
