<?php

namespace Database\Seeders;

use App\Models\KremaList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KremaListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KremaList::create([
            "name"=> "Adytum Budapest",
            "krema_nap" => "5",
            "vissza_száll" => "2",
            "kr_hutes" => "9000",
        ]);
        KremaList::create([
            "name"=> "Adytum Geszthely",
            "krema_nap" => "5",
            "vissza_száll" => "2",
            "kr_hutes" => "9000",
        ]);
        KremaList::create([
            "name"=> "Adytum Kiliti",
            "krema_nap" => "5",
            "vissza_száll" => "2",
            "kr_hutes" => "9000",
        ]);
        KremaList::create([
            "name"=> "KirálySzL",
            "krema_nap" => "5",
            "vissza_száll" => "2",
            "kr_hutes" => "9000",
        ]);
        KremaList::create([
            "name"=> "Makó",
            "krema_nap" => "5",
            "vissza_száll" => "2",
            "kr_hutes" => "9000",
        ]);
        KremaList::create([
            "name"=> "Debrecen",
            "krema_nap" => "5",
            "vissza_száll" => "2",
            "kr_hutes" => "9000",
        ]);
        KremaList::create([
            "name"=> "Csömör",
            "krema_nap" => "5",
            "vissza_száll" => "2",
            "kr_hutes" => "9000",
        ]);
    }
}
