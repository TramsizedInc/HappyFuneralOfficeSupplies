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
            "name" => "Developer",
            "slug" => "dev"
        ]);
        Role::create([
            "name" => "Administrator",
            "slug" => "admin"
        ]);
        Role::create([
            "name" => "General Manager",
            "slug" => "manager"
        ]);
        Role::create([
            "name" => "Office Manager",
            "slug" => "office_manager"
        ]); Role::create([
            "name" => "Shift Manager",
            "slug" => "Shit_manager"
        ]);
    }
}
