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
    public function run()
    {
        // \App\Models\Menu::factory()->create([
        //         'users_id' => 1,
        //     'date' => '2024-05-23',
        //     'staple' => 'ご飯',
        //     'main_dish' => 'ご飯',
        //     'side_dish1' => 'ご飯',
        //     'side_dish2' => 'ご飯',
        //     'etc1' => 'ご飯',
        //     'etc2' => 'ご飯',
        //     'comment' => 'お米大好き',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        DB::table('menus')->insert([
            'users_id' => 1,
            'date' => '2024-05-23',
            'staple' => 'ご飯',
            'main_dish' => 'ご飯',
            'side_dish1' => 'ご飯',
            'side_dish2' => 'ご飯',
            'etc1' => 'ご飯',
            'etc2' => 'ご飯',
            'comment' => 'お米大好き',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('menus')->insert([
            'users_id' => 2,
            'date' => '2024-05-23',
            'staple' => '味噌汁',
            'main_dish' => 'ご飯',
            'side_dish1' => 'ご飯',
            'side_dish2' => 'ご飯',
            'etc1' => 'ご飯',
            'etc2' => 'ご飯',
            'comment' => 'お米大好き',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('menus')->insert([
            'users_id' => 1,
            'date' => '2024-05-23',
            'staple' => '魚',
            'main_dish' => 'ご飯',
            'side_dish1' => 'ご飯',
            'side_dish2' => 'ご飯',
            'etc1' => 'ご飯',
            'etc2' => 'ご飯',
            'comment' => 'お米大好き',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
