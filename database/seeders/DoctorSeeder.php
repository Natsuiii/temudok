<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::factory()->create([
            'doctor_name' => 'dr. Fendy Wijaya, Sp.PD-KGEH',
            'category_id' => 1
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'dr. Owen Tamashi, Sp.PD-KKV',
            'category_id' => 1
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'dr. Tiara Andini Kesuma, Sp.PD-KR',
            'category_id' => 1
        ]);
        
        Doctor::factory()->create([
            'doctor_name' => 'dr. Rere Andin Huang, Sp.PD-KAI',
            'category_id' => 1
        ]);
        
        Doctor::factory()->create([
            'doctor_name' => 'dr. Kevyn Lim, Sp.KK',
            'category_id' => 2
        ]);
        
        Doctor::factory()->create([
            'doctor_name' => 'dr. Ismail Marzuki, Sp.DV',
            'category_id' => 2
        ]);
        
        Doctor::factory()->create([
            'doctor_name' => 'dr. Maria Kusuma, Sp.DVE',
            'category_id' => 2
        ]);
        
        Doctor::factory()->create([
            'doctor_name' => 'dr. Agus Skibidi, Sp.KK',
            'category_id' => 2
        ]);
        
        Doctor::factory()->create([
            'doctor_name' => 'dr. Justin Regan, Sp.THT-KL',
            'category_id' => 3
        ]);
        
        Doctor::factory()->create([
            'doctor_name' => 'dr. Wilbert Yang, Sp.THT-KL',
            'category_id' => 3
        ]);
        
        Doctor::factory()->create([
            'doctor_name' => 'dr. Flavia Louis, Sp.THT-KL',
            'category_id' => 3
        ]);
        
        Doctor::factory()->create([
            'doctor_name' => 'dr. Alves Renato, Sp.GK',
            'category_id' => 4
        ]);
        
        Doctor::factory()->create([
            'doctor_name' => 'dr. Julio Aja, Sp.GK',
            'category_id' => 4
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'dr. Andrew Nicholas, Sp.G',
            'category_id' => 4
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'dr. Sherly Stacia Andani, Sp.G',
            'category_id' => 4
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'dr. Tiara Intan Kusuma, Sp.OG',
            'category_id' => 5
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'dr. Evelyn Angelica, Sp.OG',
            'category_id' => 5
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'dr. Valentcia Angelica, Sp.OG',
            'category_id' => 5
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'dr. Aurora Florensia, Sp.OG',
            'category_id' => 5
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'drg. Leonardo Zheng, Sp.KG',
            'category_id' => 6
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'drg. Andrew Alfonso, Sp.PM',
            'category_id' => 6
        ]);

        Doctor::factory()->create([
            'doctor_name' => 'drg. Christin Lay, Sp.KGA',
            'category_id' => 6
        ]);
    }
}
