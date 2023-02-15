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
        $dayEnd = $this->faker->time();
        $dayStart = $this->faker->time();
        return [
            'location_id' => $this->faker->randomElement($location),
            'manual_override' => $this->faker->boolean(),
            'day_start' => ($dayStart < $dayEnd) ? $dayStart : $dayEnd,
            'day_end' => ($dayStart > $dayEnd) ? $dayStart : $dayEnd,
            'interval' => $this->faker->numberBetween(0, 90),
        ];
    }
}
