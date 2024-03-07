<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrnBagTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            "name" => "Úrnatáska műanyag",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
        Role::factory()->create([
            "name" => "Úrnatáska textil",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
        Role::factory()->create([
            "name" => "Úrnadoboz",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
    }
}
