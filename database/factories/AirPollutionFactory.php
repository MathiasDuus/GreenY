<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AirPollution>
 */
class AirPollutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $severities = ['none', 'low', 'high'];
        $location = \App\Models\Location::pluck('id')->toArray();
        return [
            'location_id' => $this->faker->randomElement($location),
            'severity' => $this->faker->randomElement($severities),
        ];
    }
}
