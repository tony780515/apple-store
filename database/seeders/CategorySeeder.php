<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Mac',
                'code' => 'Mac',
            ],
            [
                'name' => 'iPad',
                'code' => 'iPad',
            ],
            [
                'name' => 'iPhone',
                'code' => 'iPhone',
            ],
            [
                'name' => 'Watch',
                'code' => 'Watch',
            ]

        ]);
    }
}
