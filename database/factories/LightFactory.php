<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Light>
 */
class LightFactory extends Factory
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
            'manual_override' => $this->faker->boolean(),
        ];
    }
}
