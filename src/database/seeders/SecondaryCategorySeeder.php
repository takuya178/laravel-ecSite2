<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecondaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secondary_categories')->insert([
            [
                'name' => 'ハイリスク薬',
                'primary_category_id' => 1,
                'sort_order' => 1,
            ],
            [
                'name' => '麻薬',
                'primary_category_id' => 1,
                'sort_order' => 2,
            ],
            [
                'name' => '毒薬',
                'primary_category_id' => 1,
                'sort_order' => 3,
            ],
        ]);
    }
}
