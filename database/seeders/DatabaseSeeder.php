<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\User::factory(10)->create();
        
        /**miagecistevesdedvasfaszvan */
        $this->call(
            [
                RoleSeeder::class,
                OfficeSeeder::class,
                PrinterTypeSeeder::class,
                BrandSeeder::class,
                CheckTypeSeeder::class
            ]
          );
        \App\Models\User::factory()->create([
            'name' => 'tem.izabella',
            'email' => 'test@example.com',
            'password' => Hash::make('Aevum324454'),
            'role_id' => 4,
            'office_id'=> 1
          ]);
          \App\Models\User::factory()->create([
              'name' => 'dev',
              'email' => 'dev@temetkezes.hu',
              'password' => Hash::make('dev122937'),
              'role_id' => 1,
              'office_id'=> 1
          ]);



        $this->call([OfficeSupplySeeder::class]);
    }
}
