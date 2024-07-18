<?php

namespace Database\Seeders;

use App\Models\PrinterType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrinterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrinterType::factory()->create(
            [
                'name' => 'OKI MB492'
            ]
        );
        PrinterType::factory()->create(
            [
                'name' => 'OKI MB472'
            ]
        );
        PrinterType::factory()->create(
            [
                'name' => 'OKI ES4192'
            ]
        );

         PrinterType::factory()->create(
             [
                 'name' => 'OKIMB760'
             ]
         );

         PrinterType::factory()->create(
             [
                 'name' => 'EPSON 6190'
             ]
         );

        PrinterType::factory()->create(
            [
                'name' => 'XEROX 7225'
            ]
        );
        PrinterType::factory()->create(
            [
                'name' => 'XEROX 7232'
            ]
        );
        PrinterType::factory()->create(
            [
                'name' => 'EPSON WF879'
            ]
        );
    }
}
