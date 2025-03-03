<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManualGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manual_groups = [
            ["name" => "クレド"],
            ["name" => "ドリンク"],
            ["name" => "スイーツ"],
            ["name" => "シーシャ"],
            ["name" => "オペレーション"],
            ["name" => "システム"]
        ];

        $i = 0;
        foreach($manual_groups as $manual_group){
            DB::table('manual_groups')->insert([
                'name' => $manual_group['name']
            ]);
            $i += 1;
        }
    }
}
