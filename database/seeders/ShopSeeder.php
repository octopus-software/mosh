<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shops = [
            ["name" => "本部"],
            ["name" => "柏"],
            ["name" => "東村山"],
            ["name" => "流山おおたかの森"]
        ];

        $i = 0;
        foreach($shops as $shop){
            DB::table('shops')->insert([
                'name' => $shop['name']
            ]);
            $i += 1;
        }
    }
}
