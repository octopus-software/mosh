<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            ["name" => "KEMURI SHISHA"],
            ["name" => "SHISHA MONSTER"],
            ["name" => "Kagaya"],
            ["name" => "Shisha Mart"]
        ];

        $i = 0;
        foreach($suppliers as $supplier){
            DB::table('suppliers')->insert([
                'name' => $supplier['name']
            ]);
            $i += 1;
        }
    }
}
