<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ["name" => "フルーツ"],
            ["name" => "スッキリ"],
            ["name" => "ドリンク"],
            ["name" => "お菓子"],
            ["name" => "くせ"]
        ];

        $i = 0;
        foreach($categories as $category){
            DB::table('categories')->insert([
                'name' => $category['name']
            ]);
            $i += 1;
        }
    }
}
