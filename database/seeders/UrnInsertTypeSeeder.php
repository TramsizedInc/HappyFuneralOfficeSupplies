<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrnInsertTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            "name" => "Téglatest",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
        Role::factory()->create([
            "name" => "Hengeralakú",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
        Role::factory()->create([
            "name" => "Flexibilis",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
        Role::factory()->create([
            "name" => "Oldódó",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
    }
}
