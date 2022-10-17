<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '処方箋薬',
                'sort_order' => 1,
            ],
            [
                'name' => '普通薬',
                'sort_order' => 2,
            ],
            [
                'name' => '一般薬',
                'sort_order' => 3,
            ],
        ]);
    }
}
