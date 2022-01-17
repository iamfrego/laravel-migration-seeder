<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Flight;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $_flight = new Flight();
            $_flight->name = $faker->word();
            $_flight->airline = $faker->asciify();
            $_flight->save();
        }
    }
}