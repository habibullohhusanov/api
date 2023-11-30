<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "category_id" => 1,
            "name" => [
                "en" => "chair",
                "uz" => "stul",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 2,
            "name" => [
                "en" => "bed",
                "uz" => "divan",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 3,
            "name" => [
                "en" => "table",
                "uz" => "sto'l",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 4,
            "name" => [
                "en" => "arm chair",
                "uz" => "yumshoq o'rindiq",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 1,
            "name" => [
                "en" => "chair",
                "uz" => "stul",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 2,
            "name" => [
                "en" => "bed",
                "uz" => "divan",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 3,
            "name" => [
                "en" => "table",
                "uz" => "sto'l",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 4,
            "name" => [
                "en" => "arm chair",
                "uz" => "yumshoq o'rindiq",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 1,
            "name" => [
                "en" => "chair",
                "uz" => "stul",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 2,
            "name" => [
                "en" => "bed",
                "uz" => "divan",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 3,
            "name" => [
                "en" => "table",
                "uz" => "sto'l",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 4,
            "name" => [
                "en" => "arm chair",
                "uz" => "yumshoq o'rindiq",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 1,
            "name" => [
                "en" => "chair",
                "uz" => "stul",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 2,
            "name" => [
                "en" => "bed",
                "uz" => "divan",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 3,
            "name" => [
                "en" => "table",
                "uz" => "sto'l",
            ],
            "price" => 55,
            "count" => 15,
        ]);
        Product::create([
            "category_id" => 4,
            "name" => [
                "en" => "arm chair",
                "uz" => "yumshoq o'rindiq",
            ],
            "price" => 55,
            "count" => 15,
        ]);
    }
}
