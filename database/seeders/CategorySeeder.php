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
            'category_name' => 'Penyakit Dalam'
        ]);

        Category::factory()->create([
            'category_name' => 'Kulit dan Kecantikan'
        ]);

        Category::factory()->create([
            'category_name' => 'Telinga, Hidung, dan Tenggorokan'
        ]);

        Category::factory()->create([
            'category_name' => 'Gizi Sehat'
        ]);

        Category::factory()->create([
            'category_name' => 'Kehamilan'
        ]);

        Category::factory()->create([
            'category_name' => 'Gigi dan Mulut'
        ]);
    }
}
