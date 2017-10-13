<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 33;
        for ($i=0; $i < $limit; $i++) { 
        	DB::table('tasks')->insert([
        		'body' => $faker->realText($maxNbChars = 20, $indexSize = 1),
        		
        	]);

        }
    }
}
