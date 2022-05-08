<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    { 
        return [
            'airline' => $this->faker->company(),
            'flight_start_time' => $this->faker->dateTime(),
            'from' => $this->faker->city(),
            'to' => $this->faker->city()
        ];
    }
}
