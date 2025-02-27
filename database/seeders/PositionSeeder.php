<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            ["name" => "オーナー"],
            ["name" => "マネージャー"],
            ["name" => "店長"],
            ["name" => "スタッフ"]
        ];

        $i = 0;
        foreach($positions as $position){
            DB::table('positions')->insert([
                'name' => $position['name']
            ]);
            $i += 1;
        }
    }
}
