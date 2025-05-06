<?php

namespace Database\Seeders;
use App\Models\Train;

use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $companies = ["Trenitalia", "Italo", "Trenord"];
        for($i = 0; $i <20; $i++){

            
            $newTrain = new Train();

            $newTrain->company = $companies[array_rand($companies)];
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_time = $faker->dateTimeThisYear->format('Y-m-d H:i:s');
            $newTrain->arrival_time = $faker->dateTimeThisYear->format('Y-m-d H:i:s');
            $newTrain->train_code = $faker->regexify('[A-Z]{2}[0-9]{4}');
            $newTrain->carriage_count =$faker->numberBetween(3, 15);
            $newTrain->cancelled = $faker->boolean;
            $newTrain->on_time = $faker->boolean;
            
            $newTrain->save();
        }
    }
}
