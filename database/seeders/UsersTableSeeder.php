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
                'email' => 'test1@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'name' => '田中太郎',
                'remember_token' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'test2@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'name' => '佐藤花子',
                'remember_token' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'test3@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'name' => '鈴木一郎',
                'remember_token' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'test4@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'name' => '高橋美咲',
                'remember_token' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'test5@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'name' => '山田健太',
                'remember_token' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'test6@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'name' => '中村麻里',
                'remember_token' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
