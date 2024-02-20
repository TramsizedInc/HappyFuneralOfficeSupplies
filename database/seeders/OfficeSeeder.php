<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Office::factory()->create(
            [
                'zip_code' => '1064',
                'city' => 'Budapest',
                'street' => 'Izabella u.',
                'house_number' => '64',
                'number_of_workers' => 1
            ]
        );

        Office::factory()->create(
            [
                'zip_code' => '1173',
                'city' => 'Budapest',
                'street' => 'Pesti út',
                'house_number' => '41/A',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '1096',
                'city' => 'Budapest',
                'street' => 'Lenhossék u.',
                'house_number' => '33',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '1114',
                'city' => 'Budapest',
                'street' => 'Villányi út',
                'house_number' => '6',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '1096',
                'city' => 'Budapest',
                'street' => 'Ernő utca',
                'house_number' => '30-34',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '1123',
                'city' => 'Budapest',
                'street' => 'Nagyenyed u.',
                'house_number' => '1',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '1147',
                'city' => 'Budapest',
                'street' => 'Thököly út',
                'house_number' => '167',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '1204',
                'city' => 'Budapest',
                'street' => 'Szivacs utca',
                'house_number' => '5',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '1042',
                'city' => 'Budapest',
                'street' => 'Árpád út',
                'house_number' => '88',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '1071',
                'city' => 'Budapest',
                'street' => 'Dembinszky u.',
                'house_number' => '44',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '4029',
                'city' => 'Debrecen',
                'street' => 'Csapó u.',
                'house_number' => '53',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '3100',
                'city' => 'Salgótarján',
                'street' => 'Füleki út',
                'house_number' => '12',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '4400',
                'city' => 'Nyíregyháza',
                'street' => 'Dózsa gyürgy u.',
                'house_number' => '70',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '1139',
                'city' => 'Budapest',
                'street' => 'Papp Károly u.',
                'house_number' => '12',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '1032',
                'city' => 'Budapest',
                'street' => 'Bécsi út',
                'house_number' => '143',
                'number_of_workers' => 1
            ]
        );
        Office::factory()->create(
            [
                'zip_code' => '5600',
                'city' => 'Békéscsaba',
                'street' => 'Munkácsy utca',
                'house_number' => '9',
                'number_of_workers' => 1
            ]
        );
    }
}
