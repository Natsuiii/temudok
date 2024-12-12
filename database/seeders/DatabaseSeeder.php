<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\AppointmentStatus;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::factory()->create([
            'name' => 'Guest'
        ]);

        Role::factory()->create([
            'name' => 'Doctor'
        ]);

        Role::factory()->create([
            'name' => 'Admin'
        ]);

        User::factory()->create([
            'name' => 'Ohuen',
            'email' => 'owentb125@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 3
        ]);

        User::factory()->create([
            'name' => 'Pewdi',
            'email' => 'pewdi@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 2
        ]);

        AppointmentStatus::factory()->create([
            'status_name' => 'Scheduled',
        ]);

        AppointmentStatus::factory()->create([
            'status_name' => 'Success',
        ]);

        AppointmentStatus::factory()->create([
            'status_name' => 'Pending',
        ]);

        AppointmentStatus::factory()->create([
            'status_name' => 'Canceled',
        ]);
    }
}
