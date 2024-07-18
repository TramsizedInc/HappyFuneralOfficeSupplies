<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Printer;

class PrinterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Printer::create([
            "brand" => "Samsung",
            "type" => "ML2020",
            "picture" => "lalaland",
            "documentation" => "ez egy nagy rakás szar, de van hozzá driver xD",
            "type_of_toner" => "92",
            "type_of_drumm_unit" => "2"
        ]);
        Printer::create([
            "brand" => "Hewlett & Packart",
            "type" => "Print Machine Lat.2",
            "picture" => "pic",
            "documentation" => "ez egy nagy rakás szar, de van hozzá driver xD",
            "type_of_toner" => "30",
            "type_of_drumm_unit" => "100"
        ]);
    }
}
