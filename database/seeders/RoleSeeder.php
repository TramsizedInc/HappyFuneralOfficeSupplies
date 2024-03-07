<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::factory()->create([
            "name" => "Developer",
            "slug" => "dev"
        ]);
        Role::factory()->create([
            "name" => "Administrator",
            "slug" => "admin"
        ]);
        Role::factory()->create([
            "name" => "General Manager",
            "slug" => "manager"
        ]);
        Role::factory()->create([
            "name" => "Office Manager",
            "slug" => "office_manager"
        ]); Role::factory()->create([
            "name" => "Shift Manager",
            "slug" => "Shit_manager"
        ]);
    }
}
