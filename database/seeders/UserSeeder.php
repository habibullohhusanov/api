<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("2407"),
        ]);
        $user->assignRole('admin');
        $user = User::create([
            "name" => "Shop assistant",
            "email" => "shop_assistant@gmail.com",
            "password" => Hash::make("2407"),
        ]);
        $user->assignRole('shop assistant');
        $user = User::create([
            "name" => "Helper",
            "email" => "helper@gmail.com",
            "password" => Hash::make("2407"),
        ]);
        $user->assignRole('helper');
        $user = User::create([
            "name" => "Customer",
            "email" => "customer@gmail.com",
            "password" => Hash::make("2407"),
        ]);
        $user->assignRole('Customer');
        $user = User::create([
            "name" => "bbn",
            "email" => "bbn@gmail.com",
            "password" => Hash::make("2407"),
        ]);
        $user->assignRole('Customer');
    }
}
