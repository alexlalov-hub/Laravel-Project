<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'weekday' => $this->faker->numberBetween(0,6),
            'from' => $this->faker->numberBetween(0,23),
            'to' => $this->faker->numberBetween(0,23)
        ];
    }
}
