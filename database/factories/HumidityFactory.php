<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Humidity>
 */
class HumidityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $location = \App\Models\Location::pluck('id')->toArray();
        return [
            'location_id' => $this->faker->randomElement($location),
            'percentage' => $this->faker->numberBetween(0, 100),
            'interval' => $this->faker->numberBetween(0, 90),
        ];
    }
}
