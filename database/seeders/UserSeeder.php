<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Данил',
            'surname' => 'Зайцев',
            'login' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin111'),
            'is_admin' => true
        ]);
    }
}
