<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\City::factory(10)->create();
        \App\Models\Location::factory(10)->create();
        \App\Models\AirPollution::factory(10)->create();
        \App\Models\Humidity::factory(10)->create();
        \App\Models\Light::factory(10)->create();
        \App\Models\Temperature::factory(10)->create();
    }
}
