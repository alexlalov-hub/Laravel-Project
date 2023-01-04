<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $doctors = Doctor::all();
        return [
            'doctor_id' => fake()->unique()->numberBetween(1, $doctors->count()),
            'date' => fake()->date(),
            'start_time' => fake()->time('H:i'),
            'finish_time' => fake()->time('H:i'),
        ];
    }
}
