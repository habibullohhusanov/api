<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name" => [
                "en" => "chair",
                "uz" => "stul",
            ],
        ]);
        Category::create([
            "name" => [
                "en" => "bed",
                "uz" => "divan",
            ],
        ]);
        Category::create([
            "name" => [
                "en" => "table",
                "uz" => "sto'l",
            ],
        ]);
        Category::create([
            "name" => [
                "en" => "arm chair",
                "uz" => "yumshoq o'rindiq",
            ],
        ]);
    }
}
