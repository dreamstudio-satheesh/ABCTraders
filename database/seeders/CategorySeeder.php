<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            // Main Categories
            ['name' => 'Menswear', 'status' => 1, 'parent_id' => null],
            ['name' => 'Womenswear', 'status' => 1, 'parent_id' => null],
            ['name' => 'Kidswear', 'status' => 1, 'parent_id' => null],
            ['name' => 'Accessories', 'status' => 1, 'parent_id' => null],

            // Subcategories under Menswear
            ['name' => 'T-Shirts', 'status' => 1, 'parent_id' => 1],
            ['name' => 'Jeans','status' => 1, 'parent_id' => 1],

            // Subcategories under Womenswear
            ['name' => 'Dresses', 'status' => 1, 'parent_id' => 2],
            ['name' => 'Sarees', 'status' => 1, 'parent_id' => 2],

            // Subcategories under Kidswear
            ['name' => 'Shorts', 'status' => 1, 'parent_id' => 3],
            ['name' => 'Jackets', 'status' => 1, 'parent_id' => 3],

            // Subcategories under Accessories
            ['name' => 'Bags','status' => 1, 'parent_id' => 4],
            ['name' => 'Belts','status' => 1, 'parent_id' => 4],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
