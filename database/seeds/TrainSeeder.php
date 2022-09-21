<?php

use App\Models\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $train =new Train();

            $train->company = $faker->company();
            $train->from = $faker->city();
            $train->to = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->ean8();
            $train->coach_nr = $faker->randomDigitNotNull();
            $train->is_deleted = $faker->boolean();
            $train->in_time = $faker->boolean();

            $train->save();
        }
    }
}
