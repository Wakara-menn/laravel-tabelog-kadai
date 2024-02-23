<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MajorCategory;

class MajorCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $major_category_names = [
            '居酒屋', '焼肉', '寿司', 'ラーメン', '定食', 'カレー',
            '喫茶店', '中華料理', 'イタリア料理', 'フランス料理', 'スペイン料理',
            '韓国料理', 'タイ料理', '海鮮料理', 'ステーキ', 'ハンバーグ', 'ハンバーガー',
            'そば', 'うどん', 'お好み焼き', 'たこ焼き', '鍋料理', 'バー', 'パン', 'スイーツ',
            '和食', 'おでん', '焼き鳥', 'すき焼き', 'しゃぶしゃぶ', '天ぷら', '揚げ物', '丼物', '鉄板焼き'
        ];

        if (isset($major_category_names)) {
            MajorCategory::create([
                'name' => $major_category_name,
                'description' => $major_category_name,
            ]);
        }
    }
}