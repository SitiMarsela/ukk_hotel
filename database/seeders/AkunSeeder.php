<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'username' => 'admin',
            'name' => 'Adminnya',
            'email' => 'admin@gmail,com',
            'level' => 'admin',
            'password' => bcrypt('admin123'),
            ],
            [
            'username' => 'resepsionis',
            'name' => 'resepsionis',
            'email' => 'resepsionis@gmail,com',
            'level' => 'resepsionis',
            'password' => bcrypt('123456'),
            ]
            ];
            foreach ($user as $key => $value) {
                User::create($value);
            } 
        }
}
