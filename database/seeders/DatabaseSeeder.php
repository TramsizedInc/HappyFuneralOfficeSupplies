<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Printer;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([RoleSeeder::class]);
        // $this->call([OfficeSeeder::class]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@temetkezes.hu',
        // ]);

        // \App\Models\User::factory(10)->create();

        /**miagecistevesdedvasfaszvan */
        $this->call(
            [
                RoleSeeder::class,
                OfficeSeeder::class,
                PrinterSeeder::class,
                PrinterTypeSeeder::class,
                BrandSeeder::class,
                CheckTypeSeeder::class,
                UrnInsertSeeder::class,
                UrnInsertTypeSeeder::class,
            ]
        );
        User::factory()->create([
            'name' => 'dev',
            'email' => 'dev@temetkezes.hu',
            'password' => Hash::make('dev122937'),
            'role_id' => 1,
            'office_id' => 1
        ]);
        User::factory()->create([
            'name' => 'Edmond',
            'email' => 'edmond@temetkezes.hu',
            'password' => Hash::make('Aevum213897'),
            'role_id' => 1,
            'office_id' => 1
        ]);
        User::factory()->create([
            'name' => 'Karesz',
            'email' => 'karesz@temetkezes.hu',
            'password' => Hash::make('Aevum798342'),
            'role_id' => 1,
            'office_id' => 1
        ]);
        // Office 1
        User::factory()->create([
            'name' => 'tem.dembinszky',
            'email' => 'dembinszky@temetkezes.hu',
            'password' => Hash::make('Aevum324451'),
            'role_id' => 4,
            'office_id' => 1
        ]);
        User::factory()->create([
            'name' => 'tem.izabella',
            'email' => 'izabella@temetkezes.hu',
            'password' => Hash::make('Aevum324454'),
            'role_id' => 4,
            'office_id' => 2
        ]);

        // Office 2
        User::factory()->create([
            'name' => 'tem.pesti',
            'email' => 'pesti@temetkezes.hu',
            'password' => Hash::make('Aevum324554'),
            'role_id' => 4,
            'office_id' => 3
        ]);

        // Office 3
        User::factory()->create([
            'name' => 'tem.lenhossék',
            'email' => 'lenhossék@temetkezes.hu',
            'password' => Hash::make('Aevum321454'),
            'role_id' => 4,
            'office_id' => 4
        ]);

        // Office 4
        User::factory()->create([
            'name' => 'tem.villányi',
            'email' => 'villányi@temetkezes.hu',
            'password' => Hash::make('Aevum324423'),
            'role_id' => 4,
            'office_id' => 5
        ]);

        // Office 5
        User::factory()->create([
            'name' => 'tem.ernő',
            'email' => 'ernő@temetkezes.hu',
            'password' => Hash::make('Aevum324498'),
            'role_id' => 4,
            'office_id' => 6
        ]);

        // Office 6
        User::factory()->create([
            'name' => 'tem.nagyenyed',
            'email' => 'nagyenyed@temetkezes.hu',
            'password' => Hash::make('Aevum498627'),
            'role_id' => 4,
            'office_id' => 7
        ]);

        // Office 7
        User::factory()->create([
            'name' => 'tem.thököly',
            'email' => 'thököly@temetkezes.hu',
            'password' => Hash::make('Aevum326724'),
            'role_id' => 4,
            'office_id' => 8
        ]);

        // Office 8
        User::factory()->create([
            'name' => 'tem.szivacs',
            'email' => 'szivacs@temetkezes.hu',
            'password' => Hash::make('Aevum326454'),
            'role_id' => 4,
            'office_id' => 9
        ]);

        // Office 9
        User::factory()->create([
            'name' => 'tem.árpád',
            'email' => 'árpád@temetkezes.hu',
            'password' => Hash::make('Aevum324434'),
            'role_id' => 4,
            'office_id' => 10
        ]);
        // Office 11
        User::factory()->create([
            'name' => 'tem.papkároly',
            'email' => 'papkároly@temetkezes.hu',
            'password' => Hash::make('Aevum324414'),
            'role_id' => 4,
            'office_id' => 11
        ]);

        // Office 12
        User::factory()->create([
            'name' => 'tem.bécsi',
            'email' => 'bécsi@temetkezes.hu',
            'password' => Hash::make('Aevum324154'),
            'role_id' => 4,
            'office_id' => 12
        ]);

        // Office 13
        User::factory()->create([
            'name' => 'tem.debrecen_csapó',
            'email' => 'debrecen_csapó@temetkezes.hu',
            'password' => Hash::make('Aevum314454'),
            'role_id' => 4,
            'office_id' => 13
        ]);

        // Office 14
        User::factory()->create([
            'name' => 'tem.salgótarján_füleki',
            'email' => 'salgótarján_füleki@temetkezes.hu',
            'password' => Hash::make('Aevum321454'),
            'role_id' => 4,
            'office_id' => 14
        ]);

        // Office 15
        User::factory()->create([
            'name' => 'tem.nyíregyháza_dózsa',
            'email' => 'nyíregyháza_dózsa@temetkezes.hu',
            'password' => Hash::make('Aevum124454'),
            'role_id' => 4,
            'office_id' => 15
        ]);

        // Office 16
        User::factory()->create([
            'name' => 'tem.békéscsaba_munkácsy',
            'email' => 'békéscsaba_munkácsy@temetkezes.hu',
            'password' => Hash::make('Aevum224454'),
            'role_id' => 4,
            'office_id' => 16
        ]);

        $this->call([
            HutosIdoSeeder::class,
            OfficeSupplySeeder::class,
            KremaListSeeder::class
        ]);
    }
}
