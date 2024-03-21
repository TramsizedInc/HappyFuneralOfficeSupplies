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
<<<<<<< HEAD

=======
        // this file is used to declare the sql db records for the offices,
        //  until we are able to use ERP1's db
        Office::create([
            "office_name"=> "aevum_dembinszky",
            "zip_code" => "1071",
            "city" => "Budapest",
            "street" => "Dembinszky u.",
            "house_number" => "44",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_izabella",
            "zip_code" => "1064",
            "city" => "Budapest",
            "street" => "Izabella u.",
            "house_number" => "65",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_pesti",
            "zip_code" => "1173",
            "city" => "Budapest",
            "street" => "Pesti út",
            "house_number" => "41/A",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_lenhossék",
            "zip_code" => "1096",
            "city" => "Budapest",
            "street" => "Lenhossék u.",
            "house_number" => "33",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_villányi",
            "zip_code" => "1114",
            "city" => "Budapest",
            "street" => "Villányi út",
            "house_number" => "6",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_ernő",
            "zip_code" => "1096",
            "city" => "Budapest",
            "street" => "Ernő u.",
            "house_number" => "30-34",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_nagyenyed",
            "zip_code" => "1123",
            "city" => "Budapest",
            "street" => "Nagyenyed u.",
            "house_number" => "1",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_thököly",
            "zip_code" => "1147",
            "city" => "Budapest",
            "street" => "Thököly út",
            "house_number" => "167",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_szivacs",
            "zip_code" => "1204",
            "city" => "Budapest",
            "street" => "Szivacs utca",
            "house_number" => "5",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_árpád",
            "zip_code" => "1042",
            "city" => "Budapest",
            "street" => "Árpád út",
            "house_number" => "88",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_papkároly",
            "zip_code" => "1139",
            "city" => "Budapest",
            "street" => "Pap Károly u.",
            "house_number" => "12",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_bécsi",
            "zip_code" => "1032",
            "city" => "Budapest",
            "street" => "Bécsi út",
            "house_number" => "143",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_debrecen_csapó",
            "zip_code" => "4029",
            "city" => "Debrecen",
            "street" => "Csapó u.",
            "house_number" => "53",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_salgótarján_füleki",
            "zip_code" => "3100",
            "city" => "Salgótarján",
            "street" => "Füleki út",
            "house_number" => "12",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_nyíregyháza_dózsa",
            "zip_code" => "4400",
            "city" => "Nyíregyháza",
            "street" => "Dózsa György u.",
            "house_number" => "70",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_békéscsaba_munkácsy",
            "zip_code" => "5600",
            "city" => "Békéscsaba",
            "street" => "Munkácsy utca",
            "house_number" => "9",
            "number_of_workers" => "2"
        ]);
>>>>>>> a05aec857f9d07e62a3696bf1fd55f4b2103aa81
    }
}
