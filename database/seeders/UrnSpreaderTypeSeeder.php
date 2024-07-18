<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UrnInsert;

class UrnSpreaderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UrnInsert::factory()->create([
            "name" => "Fehér Kerék",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
        UrnInsert::factory()->create([
            "name" => "Fekete kerék",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
        UrnInsert::factory()->create([
            "name" => "Fehér szögletes",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
        UrnInsert::factory()->create([
            "name" => "Fekete szögletes",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
    }
}
