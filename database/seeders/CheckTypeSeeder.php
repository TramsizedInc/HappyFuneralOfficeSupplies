<?php

namespace Database\Seeders;

use App\Models\CheckType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CheckType::factory()->create([
            'name' => 'Áram'
        ]);
        CheckType::factory()->create([
            'name' => 'Víz-Gáz'
        ]);
        CheckType::factory()->create([
            'name' => 'Internet'
        ]);
    }
}
