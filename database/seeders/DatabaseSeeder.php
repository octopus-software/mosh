<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            ShopSeeder::class,
            ManufacturerSeeder::class,
            CategorySeeder::class,
            PositionSeeder::class,
            SupplierSeeder::class,
            UserSeeder::class,
            FlavourSeeder::class,
            ManualGroupSeeder::class,
            ManualSeeder::class,
            ShopUserSeeder::class
        ]);
    }
}
