<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attribute;

class AttributeSeeder extends Seeder
{
    public function run()
    {
        $attributes = [
            ['name' => 'Size', 'slug' => 'size'],
            ['name' => 'Color', 'slug' => 'color'],
            ['name' => 'Material', 'slug' => 'material'],
            ['name' => 'Fit', 'slug' => 'fit'],
        ];

        foreach ($attributes as $attribute) {
            Attribute::create($attribute);
        }
    }
}
