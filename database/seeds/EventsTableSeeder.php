<?php

use Illuminate\Database\Seeder;
use App\Event;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<10; $i++){
        	Event::create([
        		'id_user' => $faker->numberBetween(0,10),
        		'event' => $faker->sentence,
        		'date_start' => $faker->dateTimeThisMonth($min='now'),
        		'date_finish' => $faker->dateTimeThisYear($min='now'),
        		'status' => $faker->numberBetween(0,1)
        		]);
        }
    }
}
