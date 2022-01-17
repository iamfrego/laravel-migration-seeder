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
            $_flight->name = $faker->city();
            $_flight->airline = $faker->asciify();
            $_flight->price = $faker->numberBetween(500,10000);
            $_flight->save();
        }
    }
}