<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manuals = [
            [
                "manual_group_id"   => 1,
                "name"              => "moshクレド",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 1
            ],
            [
                "manual_group_id"   => 2,
                "name"              => "ソフトドリンク",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 1
            ],
            [
                "manual_group_id"   => 2,
                "name"              => "シェイク",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 2
            ],
            [
                "manual_group_id"   => 2,
                "name"              => "アルコール",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 3
            ],
            [
                "manual_group_id"   => 2,
                "name"              => "ドリンク仕込み",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 4
            ],
            [
                "manual_group_id"   => 2,
                "name"              => "【季節シェイク】ストロベリーチーズシェイク",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 5
            ],
            [
                "manual_group_id"   => 2,
                "name"              => "【季節サワー】みかんサワー",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 6
            ],
            [
                "manual_group_id"   => 3,
                "name"              => "スイーツ作り方",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 1
            ],
            [
                "manual_group_id"   => 3,
                "name"              => "スイーツ仕込み",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 2
            ],
            [
                "manual_group_id"   => 4,
                "name"              => "シーシャの基本",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 1
            ],
            [
                "manual_group_id"   => 4,
                "name"              => "シーシャの作り方",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 2
            ],
            [
                "manual_group_id"   => 4,
                "name"              => "ミックスと考え方",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 3
            ],
            [
                "manual_group_id"   => 5,
                "name"              => "【柏】開け閉め作業",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 1
            ],
            [
                "manual_group_id"   => 5,
                "name"              => "【柏】席の配置、埋め方",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 2
            ],
            [
                "manual_group_id"   => 5,
                "name"              => "【おおたか】開け閉め作業",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 3
            ],
            [
                "manual_group_id"   => 5,
                "name"              => "【おおたか】席の配置、埋め方",
                "manual_file_url"   => "https://example.com/1",
                "sort_number"       => 4
            ],
        ];

        $i = 0;
        foreach($manuals as $manual){
            DB::table('manuals')->insert([
                'manual_group_id' => $manual['manual_group_id'],
                'name'            => $manual['name'],
                'manual_file_url' => $manual['manual_file_url'],
                'sort_number'     => $manual['sort_number']
            ]);
            $i += 1;
        }
    }
}
