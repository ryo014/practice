<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     // \App\Models\Menu::factory()->create([
    //     //         'users_id' => 1,
    //     //     'date' => '2024-05-23',
    //     //     'staple' => 'ご飯',
    //     //     'main_dish' => 'ご飯',
    //     //     'side_dish1' => 'ご飯',
    //     //     'side_dish2' => 'ご飯',
    //     //     'etc1' => 'ご飯',
    //     //     'etc2' => 'ご飯',
    //     //     'comment' => 'お米大好き',
    //     //     'created_at' => now(),
    //     //     'updated_at' => now(),
    //     // ]);
    //     DB::table('menus')->insert([
    //         'users_id' => 1,
    //         'date' => '2024-05-23',
    //         'category' => 'ご飯',
    //         'staple' => 'ご飯',
    //         'main_dish' => 'ご飯',
    //         'side_dish1' => 'ご飯',
    //         'side_dish2' => 'ご飯',
    //         'etc1' => 'ご飯',
    //         'etc2' => 'ご飯',
    //         'comment' => 'お米大好き',
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    //     DB::table('menus')->insert([
    //         'users_id' => 2,
    //         'date' => '2024-05-23',
    //         'category' => 'ご飯',
    //         'staple' => '味噌汁',
    //         'main_dish' => 'ご飯',
    //         'side_dish1' => 'ご飯',
    //         'side_dish2' => 'ご飯',
    //         'etc1' => 'ご飯',
    //         'etc2' => 'ご飯',
    //         'comment' => 'お米大好き',
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    //     DB::table('menus')->insert([
    //         'users_id' => 1,
    //         'date' => '2024-05-23',
    //         'category' => 'ご飯',
    //         'staple' => '魚',
    //         'main_dish' => 'ご飯',
    //         'side_dish1' => 'ご飯',
    //         'side_dish2' => 'ご飯',
    //         'etc1' => 'ご飯',
    //         'etc2' => 'ご飯',
    //         'comment' => 'お米大好き',
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    // }
    public function run()
    {
        // 20件の適当な献立データを作成
        for ($i = 1; $i <= 20; $i++) {
            DB::table('menus')->insert([
                'users_id' => rand(1, 5), // 1から5のランダムなユーザーID
                'date' => now()->subDays($i)->format('Y-m-d'), // 現在の日付からi日減算した日付
                'category' => 'ご飯',
                'staple' => 'ご飯',
                'main_dish' => $this->randomMainDish(), // ランダムなメインディッシュ
                'side_dish1' => $this->randomSideDish(), // ランダムなサイドディッシュ1
                'side_dish2' => $this->randomSideDish(), // ランダムなサイドディッシュ2
                'etc1' => 'ご飯',
                'etc2' => 'ご飯',
                'comment' => 'お米大好き',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * ランダムなメインディッシュを返す
     *
     * @return string
     */
    private function randomMainDish()
    {
        $mainDishes = ['魚', '肉', '野菜炒め', 'ハンバーグ', 'カレー'];
        return $mainDishes[array_rand($mainDishes)];
    }

    /**
     * ランダムなサイドディッシュを返す
     *
     * @return string
     */
    private function randomSideDish()
    {
        $sideDishes = ['サラダ', '味噌汁', 'スープ', 'おひたし', '漬物'];
        return $sideDishes[array_rand($sideDishes)];
    }
}
