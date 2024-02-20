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
        Role::create([
            "role" => "Developer",
            "slug" => "dev"
        ]);
        Role::create([
            "role" => "Administrator",
            "slug" => "admin"
        ]);
        Role::create([
            "role" => "General Manager",
            "slug" => "manager"
        ]);
        Role::create([
            "role" => "Office Manager",
            "slug" => "office_manager"
        ]); Role::create([
            "role" => "Shift Manager",
            "slug" => "Shit_manager"
        ]);
    }
}
