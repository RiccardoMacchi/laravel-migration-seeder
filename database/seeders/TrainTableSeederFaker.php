<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

use Faker\Generator as Faker;

class TrainTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i <100; $i++){
            $new_train = new Train();
            $new_train->enterprise = $faker->word();
            $new_train->departure_station = $faker->word(2, true);
            $new_train->arrival_station = $faker->word(2, true);
            $new_train->departure_hour = $faker->time();
            $new_train->departure_day = $this->departureDay($faker);
            $new_train->arrival_hour = $this->arrivalHour($new_train->departure_hour, $faker);
            $new_train->numbers_of_carriages = $faker->numberBetween(1,30);
            $new_train->on_time = $faker->numberBetween(0, 1);
            $new_train->cancelled = $faker->numberBetween(0, 1);
            // dump($new_train);
            $new_train->save();
        }


    }
    private function arrivalHour($departure_hour, $faker){
        do {
            $arrival_hour = $faker->time();
        } while ($arrival_hour <= $departure_hour);

        return $arrival_hour;

    }

    private function departureDay($faker){
            return $departure_day = date_format($faker->dateTimeBetween('-3 month', '+6 month'), 'Y-m-d');
    }
}
