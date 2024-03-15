<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = "Stazione ferroviaria di " . $faker->city() .' - ' . $faker->state();
            $newTrain->arrival_station = "Stazione ferroviaria di " . $faker->city()  .' - ' . $faker->state();
            $newTrain->departure_time = $faker->date() .' '. $faker->time();
            $newTrain->arrival_time = $faker->date() .' '. $faker->time();
            $newTrain->train_code = $faker->randomElement(['TGV', 'ICE', 'Eurostar']) . '-' . $faker->unique()->numberBetween(1000, 9999);
            $newTrain->number_of_carriages = $faker->numberBetween(1, 10);
            $newTrain->in_time = $faker->boolean();
            $newTrain->canceled = $faker->boolean();

            $newTrain->save();
        }
    }
}
