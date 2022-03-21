<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LegendarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('1234'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
