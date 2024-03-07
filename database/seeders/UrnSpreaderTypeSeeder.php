<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrnSpreaderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            "name" => "Fehér Kerék",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
        Role::factory()->create([
            "name" => "Fekete kerék",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
        Role::factory()->create([
            "name" => "Fehér szögletes",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
        Role::factory()->create([
            "name" => "Fekete szögletes",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
    }
}
