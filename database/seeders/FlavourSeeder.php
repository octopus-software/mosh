<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlavourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $flavours = [
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 2,
                    "manufacturer_id"   => 7,
                    "name"              => "ツーアップル",
                    "category_id"       => 5,
                    "minimum_quantity"  => 500
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 2,
                    "manufacturer_id"   => 7,
                    "name"              => "ミント",
                    "category_id"       => 2,
                    "minimum_quantity"  => 500
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 2,
                    "manufacturer_id"   => 7,
                    "name"              => "レモン",
                    "category_id"       => 1,
                    "minimum_quantity"  => 200
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 2,
                    "manufacturer_id"   => 7,
                    "name"              => "バニラ",
                    "category_id"       => 4,
                    "minimum_quantity"  => 100
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 2,
                    "manufacturer_id"   => 7,
                    "name"              => "チェリー",
                    "category_id"       => 1,
                    "minimum_quantity"  => 100
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 3,
                    "manufacturer_id"   => 7,
                    "name"              => "ツーアップル",
                    "category_id"       => 5,
                    "minimum_quantity"  => 1000
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 3,
                    "manufacturer_id"   => 7,
                    "name"              => "ミント",
                    "category_id"       => 5,
                    "minimum_quantity"  => 1000
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 4,
                    "manufacturer_id"   => 7,
                    "name"              => "ダブルアップル",
                    "category_id"       => 5,
                    "minimum_quantity"  => 300
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 4,
                    "manufacturer_id"   => 7,
                    "name"              => "ミント",
                    "category_id"       => 2,
                    "minimum_quantity"  => 300
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 4,
                    "manufacturer_id"   => 7,
                    "name"              => "ピーチ",
                    "category_id"       => 1,
                    "minimum_quantity"  => 1000
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 4,
                    "manufacturer_id"   => 7,
                    "name"              => "ココナッツ",
                    "category_id"       => 4,
                    "minimum_quantity"  => 1000
                ],
                [
                    "is_fixed"          => 1,
                    "shop_id"           => 4,
                    "manufacturer_id"   => 8,
                    "name"              => "パンラズナ",
                    "category_id"       => 5,
                    "minimum_quantity"  => 1000
                ],
            ];
    
            $i = 0;
            foreach($flavours as $flavour){
                DB::table('flavours')->insert([
                    "is_fixed"          => $flavour['is_fixed'],
                    "shop_id"           => $flavour['shop_id'],
                    "manufacturer_id"    => $flavour['manufacturer_id'],
                    "name"              => $flavour['name'],
                    "category_id"       => $flavour['category_id'],
                    "minimum_quantity"  => $flavour['minimum_quantity'],
                    "is_active"         => 1
                ]);
                $i += 1;
            }
        }
    }
}
