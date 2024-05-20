<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'date' => '2024/05/23',
            'staple' => 'ご飯',
            'main_dish' => 'ご飯',
            'side_dish1' => 'ご飯',
            'side_dish2' => 'ご飯',
            'etc1' => 'ご飯',
            'etc2' => 'ご飯',
            'comment' => 'お米大好き',
        ]);
    }
}
