<?php

namespace Database\Seeders;

use App\Models\urn_insert_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrnInsertTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        urn_insert_type::factory()->create([
            "name" => "Téglatest",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
        urn_insert_type::factory()->create([
            "name" => "Hengeralakú",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
        urn_insert_type::factory()->create([
            "name" => "Flexibilis",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
        urn_insert_type::factory()->create([
            "name" => "Oldódó",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
    }
}
