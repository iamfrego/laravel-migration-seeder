<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 8; $i++) { 
            $_blog = new Blog();
            $_blog->title = $faker->sentence();
            $_blog->article = $faker -> paragraph(4,true);
            $_blog->save();
        }
    }
}