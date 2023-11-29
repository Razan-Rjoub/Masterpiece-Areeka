<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Leather Chair',
                'image' => 'http://127.0.0.1:8000/images/seeder/product/chair1.jpg',
                'price' => 30,
                'stock' => 'off',
                'descrption' => 'This is a comfortable leather chair with a sleek design.',
                'descrptionLong' => ' Elevate your comfort with our premium leather chair. 
            Its ergonomic design provides excellent lumbar support, 
            making it the perfect addition to your home or office. 
            The high-quality leather ensures durability and style.',
                'width' => '200',
                'height' => '700',
                'Depth' => '450',
                'Weight' => '500',
                'Qualitycheck' => 'yes',
                'quantity' => 30,
                'store_id' => 1,
                'category_id' => 2,
                'status' => 'active',
            ],
            [
                'id' => 3,
                'name' => 'Leather Chair',
                'image' => 'http://127.0.0.1:8000/images/seeder/product/chair2.jpg',
                'price' => 35,
                'stock' => 'off',
                'descrption' => 'This is a comfortable leather chair with a sleek design.',
                'descrptionLong' => ' Elevate your comfort with our premium leather chair. 
            Its ergonomic design provides excellent lumbar support, 
            making it the perfect addition to your home or office. 
            The high-quality leather ensures durability and style.',
                'width' => '200',
                'height' => '700',
                'Depth' => '450',
                'Weight' => '500',
                'Qualitycheck' => 'yes',
                'quantity' => 20,
                'store_id' => 1,
                'category_id' => 2,
                'status' => 'active',
            ],
            [
                'id' => 2,
                'name' => 'Sofa Chair',
                'image' => 'http://127.0.0.1:8000/images/seeder/product/sofa1.jpg',
                'price' => 50,
                'stock' => 'on',
                'descrption' => 'This is a comfortable Sofa chair with a sleek design.',
                'descrptionLong' => ' Elevate your comfort with our premium Sofa chair. 
            Its ergonomic design provides excellent lumbar support, 
            making it the perfect addition to your home or office. 
            The high-quality leather ensures durability and style.',
                'width' => '200',
                'height' => '700',
                'Depth' => '450',
                'Weight' => '500',
                'Qualitycheck' => 'yes',
                'quantity' => 10,
                'store_id' => 1,
                'category_id' => 1,
                'status' => 'active',
            ],
        ]);
    }
}
