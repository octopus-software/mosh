<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shop_users = [
            [
                "user_id" => 1,
                "shop_id" => 1
            ],
            [
                "user_id" => 1,
                "shop_id" => 2
            ],
            [
                "user_id" => 2,
                "shop_id" => 2
            ],
            [
                "user_id" => 3,
                "shop_id" => 3
            ],
            [
                "user_id" => 3,
                "shop_id" => 4
            ],
            [
                "user_id" => 4,
                "shop_id" => 2
            ],
        ];

        foreach($shop_users as $shop_user){
            DB::table('shop_user')->insert([
                'user_id' => $shop_user['user_id'],
                'shop_id' => $shop_user['shop_id']
            ]);
        }
    }
}
