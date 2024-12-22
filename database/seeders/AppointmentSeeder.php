<?php

namespace Database\Seeders;

use App\Models\AppointmentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppointmentStatus::factory()->create([
            'status_name' => 'Accepted',
        ]);

        AppointmentStatus::factory()->create([
            'status_name' => 'Rejected',
        ]);

        AppointmentStatus::factory()->create([
            'status_name' => 'Rescheduled',
        ]);

        AppointmentStatus::factory()->create([
            'status_name' => 'Pending',
        ]);
    }
}
