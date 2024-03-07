<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            "name" => "24f",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "26 fehér",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "26 fekete",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "26 GY",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "26 A",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "27 A",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "27 AF",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "28",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "30 A",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "30 AF",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "38 A",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "41 AF",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
        Role::factory()->create([
            "name" => "41 A",
            "normal_price" =>"16500",
            "selling_price" =>"55000",
            "supplier" =>"Jáger"
        ]);
    }
}
