<?php

namespace Database\Seeders;

use App\Models\UrnInsert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrnInsertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UrnInsert::factory()->create([
            "name" => "Téglatest",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
        UrnInsert::factory()->create([
            "name" => "Hengeralakú",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
        UrnInsert::factory()->create([
            "name" => "Flexibilis",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
        UrnInsert::factory()->create([
            "name" => "Oldódó",
            "normal_price" =>"3250",
            "selling_price" =>"3450",
        ]);
    }
}
