<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            ['level' => '初級', 'created_at' => now()],
            ['level' => '中級', 'created_at' => now()],
            ['level' => '上級', 'created_at' => now()],
        ];

        DB::table('levels')->insert($levels);
    }
}
