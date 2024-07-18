<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\urn_bag__type;

class UrnBagTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        urn_bag__type::factory()->create([
            "name" => "Úrnatáska műanyag",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
        urn_bag__type::factory()->create([
            "name" => "Úrnatáska textil",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
        urn_bag__type::factory()->create([
            "name" => "Úrnadoboz",
            "normal_price" =>"5900",
            "selling_price" =>"5900",
        ]);
    }
}
