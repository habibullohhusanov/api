<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            "name" => [
                "en"=> "adminn",
                "uz"=> "admin",
            ]
        ]);
        Role::create([
            "name" => [
                "en"=> "client",
                "uz"=> "mijoz",
            ]
        ]);
    }
}
