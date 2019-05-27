<?php

namespace Modules\Question\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Question\Entities\Question;
use Faker\Generator as Faker;

class SeedFakeQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        for ($i=0; $i<20; $i++){
            Question::create([
                'questionText'  => $faker->unique()->sentences($nb = 3, $asText = false),
                'answerA'  =>  $faker->word,
                'answerB'  =>  $faker->word,
                'answerC'  =>  $faker->word,
                'correctAnswer'  =>  $faker->numberBetween($min = 1, $max = 3)
            ]);
        }
        //Model::reguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
