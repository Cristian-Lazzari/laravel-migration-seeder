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
     *
     * @return void
     */
    public function run(Faker $faker)
    {

    for($i = 0; $i <= 100; $i++) {
            $newtrain = Train::create([
                
                    'destination' => $faker->city(),
                    'departure' => $faker->city(),
                    'timeDestination' => '2023-09-29T19:29:00',
                    'timeDeparture' => '2023-09-29T23:29:00',
            ]);
            $newtrain->save();
        }
    }
}
