<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Menswear - T-Shirts (Main: Menswear = 1, Sub: T-Shirts = 5)
            [
                'name'           => 'Classic White T-Shirt',
                'barcode'        => 'MTS001',
                'category_id'    => 1,
                'subcategory_id' => 5,
                'attributes'     => json_encode(['size' => 'M', 'color' => 'White']),
                'supplier'       => 'Brand X',
            ],
            [
                'name'           => 'Graphic Tee',
                'barcode'        => 'MTS002',
                'category_id'    => 1,
                'subcategory_id' => 5,
                'attributes'     => json_encode(['size' => 'L', 'color' => 'Black']),
                'supplier'       => 'Brand Y',
            ],
            // Menswear - Jeans (Main: Menswear = 1, Sub: Jeans = 6)
            [
                'name'           => 'Slim Fit Jeans',
                'barcode'        => 'MJ001',
                'category_id'    => 1,
                'subcategory_id' => 6,
                'attributes'     => json_encode(['waist' => '32', 'color' => 'Blue']),
                'supplier'       => 'DenimCo',
            ],
            [
                'name'           => 'Regular Fit Jeans',
                'barcode'        => 'MJ002',
                'category_id'    => 1,
                'subcategory_id' => 6,
                'attributes'     => json_encode(['waist' => '34', 'color' => 'Dark Blue']),
                'supplier'       => 'DenimCo',
            ],
            // Womenswear - Dresses (Main: Womenswear = 2, Sub: Dresses = 7)
            [
                'name'           => 'Evening Gown',
                'barcode'        => 'WD001',
                'category_id'    => 2,
                'subcategory_id' => 7,
                'attributes'     => json_encode(['size' => 'S', 'color' => 'Red']),
                'supplier'       => 'Fashionista',
            ],
            [
                'name'           => 'Casual Dress',
                'barcode'        => 'WD002',
                'category_id'    => 2,
                'subcategory_id' => 7,
                'attributes'     => json_encode(['size' => 'M', 'color' => 'Green']),
                'supplier'       => 'Fashionista',
            ],
            // Womenswear - Sarees (Main: Womenswear = 2, Sub: Sarees = 8)
            [
                'name'           => 'Silk Saree',
                'barcode'        => 'WS001',
                'category_id'    => 2,
                'subcategory_id' => 8,
                'attributes'     => json_encode(['material' => 'Silk', 'color' => 'Maroon']),
                'supplier'       => 'SareeWorld',
            ],
            [
                'name'           => 'Cotton Saree',
                'barcode'        => 'WS002',
                'category_id'    => 2,
                'subcategory_id' => 8,
                'attributes'     => json_encode(['material' => 'Cotton', 'color' => 'Pink']),
                'supplier'       => 'SareeWorld',
            ],
            // Kidswear - Shorts (Main: Kidswear = 3, Sub: Shorts = 9)
            [
                'name'           => 'Denim Shorts',
                'barcode'        => 'KS001',
                'category_id'    => 3,
                'subcategory_id' => 9,
                'attributes'     => json_encode(['size' => 'XS', 'color' => 'Blue']),
                'supplier'       => 'KidStyle',
            ],
            [
                'name'           => 'Athletic Shorts',
                'barcode'        => 'KS002',
                'category_id'    => 3,
                'subcategory_id' => 9,
                'attributes'     => json_encode(['size' => 'XS', 'color' => 'Red']),
                'supplier'       => 'KidStyle',
            ],
            // Kidswear - Jackets (Main: Kidswear = 3, Sub: Jackets = 10)
            [
                'name'           => 'Kids Hoodie',
                'barcode'        => 'KJ001',
                'category_id'    => 3,
                'subcategory_id' => 10,
                'attributes'     => json_encode(['size' => 'XS', 'color' => 'Grey']),
                'supplier'       => 'KidFashion',
            ],
            [
                'name'           => 'Kids Jacket',
                'barcode'        => 'KJ002',
                'category_id'    => 3,
                'subcategory_id' => 10,
                'attributes'     => json_encode(['size' => 'S', 'color' => 'Black']),
                'supplier'       => 'KidFashion',
            ],
            // Accessories - Bags (Main: Accessories = 4, Sub: Bags = 11)
            [
                'name'           => 'Leather Bag',
                'barcode'        => 'AB001',
                'category_id'    => 4,
                'subcategory_id' => 11,
                'attributes'     => json_encode(['material' => 'Leather', 'color' => 'Brown']),
                'supplier'       => 'BagHouse',
            ],
            [
                'name'           => 'Backpack',
                'barcode'        => 'AB002',
                'category_id'    => 4,
                'subcategory_id' => 11,
                'attributes'     => json_encode(['material' => 'Nylon', 'color' => 'Blue']),
                'supplier'       => 'BagHouse',
            ],
            // Accessories - Belts (Main: Accessories = 4, Sub: Belts = 12)
            [
                'name'           => 'Leather Belt',
                'barcode'        => 'ACL001',
                'category_id'    => 4,
                'subcategory_id' => 12,
                'attributes'     => json_encode(['material' => 'Leather', 'color' => 'Black']),
                'supplier'       => 'BeltCo',
            ],
            [
                'name'           => 'Fabric Belt',
                'barcode'        => 'ACL002',
                'category_id'    => 4,
                'subcategory_id' => 12,
                'attributes'     => json_encode(['material' => 'Fabric', 'color' => 'Multi']),
                'supplier'       => 'BeltCo',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
