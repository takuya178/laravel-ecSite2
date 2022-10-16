<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'shop_id' => 1,
                'name' => 'ロキソニン',
                'information' => '痛みを和らげる薬です',
                'price' => 1000,
                'is_selling' => true,
                'sort_order' => null,
                'images' => null,
            ]
        ]);
    }
}
