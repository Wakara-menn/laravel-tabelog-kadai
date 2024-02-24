<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_ids = [
            '1', '2'
        ];

        $japanesefood_categories = [
            '居酒屋', '焼肉', '寿司', '定食', '喫茶店', '海鮮料理','そば', 'うどん',
            'お好み焼き', 'たこ焼き', '鍋料理', '和食', 'おでん', '焼き鳥', 'すき焼き',
            'しゃぶしゃぶ', '天ぷら', '揚げ物', '丼物', '鉄板焼き'
        ];
        
        $overseasfood_categories = [
            'ラーメン', 'カレー', '中華料理', 'イタリア料理', 'フランス料理', 'スペイン料理',
            '韓国料理', 'タイ料理','ステーキ', 'ハンバーグ', 'ハンバーガー', 'バー', 'パン', 'スイーツ',
        ];

        foreach ($major_category_ids as $major_category_id) {
            if ($major_category_id == '1') {
                foreach ($japanesefood_categories as $japanesefood_category) {
                    Category::create([
                        'name' => $japanesefood_category,
                        'description' => $japanesefood_category,
                        'major_category_id' => $major_category_id
                    ]);
                }
            }

            if ($major_category_id == '2') {
                foreach ($overseasfood_categories as $overseasfood_category) {
                    Category::create([
                        'name' => $overseasfood_category,
                        'description' => $overseasfood_category,
                        'major_category_id' => $major_category_id
                    ]);
                }
            }
        }
    }
}