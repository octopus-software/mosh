<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manufacturers = [
            ["name" => "DARKSIDE","kana_name" => "ダークサイド"],
            ["name" => "hkaleej","kana_name" => "ハリージ"],
            ["name" => "ADALYA","kana_name" => "アダリヤ"],
            ["name" => "Afzal","kana_name" => "アフザル"],
            ["name" => "AL AMASI","kana_name" => "アルアマシ"],
            ["name" => "Al Fakhamah","kana_name" => "アルファハマ"],
            ["name" => "Al Fakher","kana_name" => "アルファーヘル"],
            ["name" => "Al Waha Elite Edition","kana_name" => "アルワハエリートエディション"],
            ["name" => "AZURE BLACK LINE","kana_name" => "アズアブラックライン"],
            ["name" => "AZURE Gold Line","kana_name" => "アズアゴールドライン"],
            ["name" => "Bang Bang","kana_name" => "バンバン"],
            ["name" => "Basic Layalina","kana_name" => "ベーシックラヤリナ"],
            ["name" => "Golden Layalina","kana_name" => "ゴールデンラヤリナ"],
            ["name" => "DANI","kana_name" => "ダニ"],
            ["name" => "Debaj","kana_name" => "デバジ"],
            ["name" => "DOZAJ","kana_name" => "ドザジ"],
            ["name" => "DOZAJ BLACK","kana_name" => "ドザジブラック"],
            ["name" => "Eternal Smoke","kana_name" => "エターナルスモーク"],
            ["name" => "FANTASIA","kana_name" => "ファンタジア"],
            ["name" => "Fumari","kana_name" => "フマリ"],
            ["name" => "JENT","kana_name" => "ジェント"],
            ["name" => "JiBiAR","kana_name" => "ジビアール"],
            ["name" => "LIRRA","kana_name" => "リラ"],
            ["name" => "MALAKI","kana_name" => "マラキ"],
            ["name" => "Oduman Blend","kana_name" => "オデュマンブレンド"],
            ["name" => "Pure Tobacco","kana_name" => "ピュアタバコ"],
            ["name" => "Revoshi","kana_name" => "レボシ"],
            ["name" => "Royal smokin","kana_name" => "ロイヤルスモーキン"],
            ["name" => "SEBERO","kana_name" => "セベロ"],
            ["name" => "smyrna","kana_name" => "スミルナ"],
            ["name" => "Social Smoke","kana_name" => "ソーシャルスモーク"],
            ["name" => "Starbuzz","kana_name" => "スターバズ"],
            ["name" => "Starbuzz Vintage","kana_name" => "スターバズウィンテージ"],
            ["name" => "Tangiers","kana_name" => "タンジアース"],
            ["name" => "Trifecta","kana_name" => "トライフェクタ"],
            ["name" => "Troy","kana_name" => "トロイ"],
            ["name" => "YA LAYL","kana_name" => "ヤレール"],
            ["name" => "De Cloud","kana_name" => "デクラウド"],
            ["name" => "TABU","kana_name" => "タブ"],
            ["name" => "Silver Cloud","kana_name" => "シルバークラウド"],
            ["name" => "Dookah","kana_name" => "ドゥーカ"]
        ];

        $i = 0;
        foreach($manufacturers as $manufacturer){
            DB::table('manufacturers')->insert([
                'name' => $manufacturer['name'],
                'name_kana' => $manufacturer['kana_name']
            ]);
            $i += 1;
        }
    }
}
