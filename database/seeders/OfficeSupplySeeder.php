<?php

namespace Database\Seeders;

use App\Models\Office;
use App\Models\OfficeSupply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $officeids = Office::all()->pluck("id")->toArray();
        foreach($officeids as $officeid) {
            $office = OfficeSupply::create(["office_id" => $officeid]);
        }
    }
}
