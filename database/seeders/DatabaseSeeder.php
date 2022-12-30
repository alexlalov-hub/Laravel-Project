<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'alexlalov04',
            'firstname' => 'Alex',
            'lastname' => 'Lalov',
            'email' => 'alex.lalov04@gmail.com',
            'password' => bcrypt('Obzor4268'),
            'address' => 'Maria Gabrovska',
            'city' => 'Veliko Tarnovo',
            'country' => 'Bulgaria',
            'about' => 'Just Alex.',

        ]);

        $this->call([
            PermissionsSeeder::class,
//            UserSeeder::class,
            DoctorSeeder::class,
            ClinicSeeder::class,
        ]);
    }
}
