<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'mailaddress' => 'test1@example.com',
                'pass' => Hash::make('password123'),
                'name' => '田中太郎',
                'created_at' => now(),
            ],
            [
                'mailaddress' => 'test2@example.com',
                'pass' => Hash::make('password123'),
                'name' => '佐藤花子',
                'created_at' => now(),
            ],
            [
                'mailaddress' => 'test3@example.com',
                'pass' => Hash::make('password123'),
                'name' => '鈴木一郎',
                'created_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
