<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop',
                'price' => 55000,
                'description' => 'A powerful laptop for work and study',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mobile Phone',
                'price' => 25000,
                'description' => 'A modern Android smartphone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'price' => 2500,
                'description' => 'Wireless Bluetooth headphones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
