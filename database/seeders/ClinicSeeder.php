<?php

namespace Database\Seeders;

use App\Models\Clinic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clinic::factory()
            ->count(20)
            ->hasDoctors(3)
            ->create();
    }
}
