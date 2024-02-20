<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Office;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Office::create([
            "office_name"=> "dummyOffice",
            "zip_code" => "2336",
            "city" => "Sunavarsány",
            "street" => "Bokréta u.",
            "house_number" => "10",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "dummyOffice",
            "zip_code" => "1076",
            "city" => "Pinaváros",
            "street" => "Verseny u.",
            "house_number" => "6",
            "number_of_workers" => "2"
        ]);
    }
}
