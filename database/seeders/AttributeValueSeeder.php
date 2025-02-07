<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AttributeValue;

class AttributeValueSeeder extends Seeder
{
    public function run()
    {
        $attributeValues = [
            // Sizes
            ['attribute_id' => 1, 'value' => 'S'],
            ['attribute_id' => 1, 'value' => 'M'],
            ['attribute_id' => 1, 'value' => 'L'],
            ['attribute_id' => 1, 'value' => 'XL'],

            // Colors
            ['attribute_id' => 2, 'value' => 'Red'],
            ['attribute_id' => 2, 'value' => 'Blue'],
            ['attribute_id' => 2, 'value' => 'Black'],
            ['attribute_id' => 2, 'value' => 'White'],

            // Materials
            ['attribute_id' => 3, 'value' => 'Cotton'],
            ['attribute_id' => 3, 'value' => 'Polyester'],
            ['attribute_id' => 3, 'value' => 'Denim'],
            ['attribute_id' => 3, 'value' => 'Silk'],

            // Fit
            ['attribute_id' => 4, 'value' => 'Slim Fit'],
            ['attribute_id' => 4, 'value' => 'Regular Fit'],
            ['attribute_id' => 4, 'value' => 'Loose Fit'],
        ];

        foreach ($attributeValues as $attributeValue) {
            AttributeValue::create($attributeValue);
        }
    }
}
