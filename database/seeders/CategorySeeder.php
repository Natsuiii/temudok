<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'category_name' => 'Penyakit Dalam',
            'added_by' => 'Administrator',
        ]);

        Category::factory()->create([
            'category_name' => 'Kulit dan Kecantikan',
            'added_by' => 'Administrator',
        ]);

        Category::factory()->create([
            'category_name' => 'Telinga, Hidung, dan Tenggorokan',
            'added_by' => 'Administrator',
        ]);

        Category::factory()->create([
            'category_name' => 'Gizi Sehat',
            'added_by' => 'Administrator',
        ]);

        Category::factory()->create([
            'category_name' => 'Kehamilan',
            'added_by' => 'Administrator',
        ]);

        Category::factory()->create([
            'category_name' => 'Gigi dan Mulut',
            'added_by' => 'Administrator',
        ]);
    }
}
