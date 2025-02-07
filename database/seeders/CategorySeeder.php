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
            ['name' => 'Menswear', 'slug' => 'menswear', 'status' => 1, 'parent_id' => null],
            ['name' => 'Womenswear', 'slug' => 'womenswear', 'status' => 1, 'parent_id' => null],
            ['name' => 'Kidswear', 'slug' => 'kidswear', 'status' => 1, 'parent_id' => null],
            ['name' => 'Accessories', 'slug' => 'accessories', 'status' => 1, 'parent_id' => null],

            // Subcategories under Menswear
            ['name' => 'T-Shirts', 'slug' => 't-shirts', 'status' => 1, 'parent_id' => 1],
            ['name' => 'Jeans', 'slug' => 'jeans', 'status' => 1, 'parent_id' => 1],

            // Subcategories under Womenswear
            ['name' => 'Dresses', 'slug' => 'dresses', 'status' => 1, 'parent_id' => 2],
            ['name' => 'Sarees', 'slug' => 'sarees', 'status' => 1, 'parent_id' => 2],

            // Subcategories under Kidswear
            ['name' => 'Shorts', 'slug' => 'shorts', 'status' => 1, 'parent_id' => 3],
            ['name' => 'Jackets', 'slug' => 'jackets', 'status' => 1, 'parent_id' => 3],

            // Subcategories under Accessories
            ['name' => 'Bags', 'slug' => 'bags', 'status' => 1, 'parent_id' => 4],
            ['name' => 'Belts', 'slug' => 'belts', 'status' => 1, 'parent_id' => 4],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
