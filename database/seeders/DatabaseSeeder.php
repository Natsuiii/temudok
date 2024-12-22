<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
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
        $this->call([
            CategorySeeder::class,
            ArticleSeeder::class,
            AppointmentSeeder::class
        ]);

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
            'role_id' => 2,
            'specialization_id' => 1
        ]);

        User::factory()->create([
            'name' => 'Ahau',
            'email' => 'ahau@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 2,
            'specialization_id' => 2
        ]);

        User::factory()->create([
            'name' => 'Kepim',
            'email' => 'kepin@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 2,
            'specialization_id' => 3
        ]);

        // AppointmentStatus::factory()->create([
        //     'status_name' => 'Scheduled',
        // ]);

        // AppointmentStatus::factory()->create([
        //     'status_name' => 'Success',
        // ]);

        // AppointmentStatus::factory()->create([
        //     'status_name' => 'Pending',
        // ]);

        // AppointmentStatus::factory()->create([
        //     'status_name' => 'Canceled',
        // ]);

        
    }
}
