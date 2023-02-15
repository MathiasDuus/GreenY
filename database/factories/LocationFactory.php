<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $city = \App\Models\City::pluck('id')->toArray();

        return [
            'city_id' => $this->faker->unique()->randomElement($city),
            'greenhouse' => $this->faker->firstName(),
        ];
    }
}
