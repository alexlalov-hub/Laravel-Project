<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clinic>
 */
class ClinicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'address' => $this->faker->unique()->streetAddress(),
            'city' => $this->faker->unique()->city(),
            'country' => $this->faker->unique()->country(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->unique()->password(),
            'phone' => $this->faker->unique()->phoneNumber(),
        ];
    }
}
