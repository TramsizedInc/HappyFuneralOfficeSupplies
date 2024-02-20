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

        $this->call(
          [
              RoleSeeder::class,
              OfficeSeeder::class,
              PrinterTypeSeeder::class,
              BrandSeeder::class
          ]
        );
      \App\Models\User::factory()->create([
          'name' => 'tem.izabella',
          'email' => 'test@example.com',
          'password' => Hash::make('Aevum324454'),
          'role_id' => 4,
          'office_id'=> 1
        ]);
    }
}
