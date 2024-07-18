<?php

namespace Database\Seeders;

use App\Models\tanuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TanukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tanuk::create([
            "name"=> "Mácsai István",
            "address"=>"1172 Budapest, XI. utca 2."
        ]);
    }
}
