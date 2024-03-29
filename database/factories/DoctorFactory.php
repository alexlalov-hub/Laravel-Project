<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'address' => fake()->unique()->streetAddress(),
            'city' => fake()->unique()->city(),
            'country' => fake()->unique()->country(),
            'email' => fake()->unique()->safeEmail(),
            'password' => fake()->unique()->password(),
            'phone' => fake()->unique()->phoneNumber(),
        ];
    }
}
