<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    User::create([
        'name' => 'carlos prieto',
        'email' => 'cp534496@gmail.com',
        'password' => bcrypt('admin123')
    ]);
}
}
