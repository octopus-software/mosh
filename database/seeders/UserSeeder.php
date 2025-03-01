<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "position_id"   => 3,
                "firstname"     => "坂本",
                "lastname"      => "太郎",
                "nickname"      => "サカモト",
                "gender"        => 0,
                "birthday"      => "1993-11-21"
            ],
            [
                "position_id"   => 4,
                "firstname"     => "坂本",
                "lastname"      => "葵",
                "nickname"      => "アオイ",
                "gender"        => 1,
                "birthday"      => "1996-8-21"
            ],
            [
                "position_id"   => 4,
                "firstname"     => "朝倉",
                "lastname"      => "シン",
                "nickname"      => "アサシン",
                "gender"        => 0,
                "birthday"      => "2000-6-7",
            ],
            [
                "position_id"   => 4,
                "firstname"     => "陸",
                "lastname"      => "小糖",
                "nickname"      => "ルー",
                "gender"        => 1,
                "birthday"      => "2002-4-8"
            ],
        ];

        $i = 0;
        foreach($users as $user){
            DB::table('users')->insert([
                "position_id"   => $user['position_id'],
                "firstname"     => $user['firstname'],
                "lastname"      => $user['lastname'],
                "nickname"      => $user['nickname'],
                "gender"        => $user['gender'],
                "birthday"      => $user['birthday'],
                "email"         => $i."@example.mosh.com",
                "staff_code"    => "000".$i,
                "password"      => Hash::make("password"),
                "profile_image_url" => null,
                "is_active"     => 1
            ]);
            $i += 1;
        }
    }
}
