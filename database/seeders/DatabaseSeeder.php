<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Train::create([
                'name' => $faker->words(2, true),
                'route' => $faker->words(2, true),
                'departure_time' => $faker->time('H:i:s'),
                'arrival_time' => $faker->time('H:i:s'),
                'price' => $faker->randomFloat(2, 10, 100),
                'seats_available' => $faker->numberBetween(50, 200),
            ]);
        }
    }
}
