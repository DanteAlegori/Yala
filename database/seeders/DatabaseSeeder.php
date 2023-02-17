<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'принтер',
            'category_id' => '1',
            'content'  => 'бла бла бла бла',
            'image'  => '1printer.jpg',
            'price'  => '600',
        ]

    );
    }
}
