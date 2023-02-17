<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'принтер',
            'category_id' => '1',
            'content'  => 'бла бла бла бла',
            'image'  => '1printer.jpg',
            'price'  => '600',
        ]);
    }
}
