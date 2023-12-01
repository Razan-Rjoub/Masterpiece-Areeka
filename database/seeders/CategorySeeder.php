<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'image' => 'http://127.0.0.1:8000/images/seeder/category/Sofa.png',
                'name' => ' Sofa',
                'store_id' => 2,
            ],
            [
                'id' => 2,
                'image' => 'http://127.0.0.1:8000/images/seeder/category/kitchen.png',
                'name' => ' Kitchen',
                'store_id' => 2,
            ],
            [
                'id' => 3,
                'image' => 'http://127.0.0.1:8000/images/seeder/category/BedRoom.png',
                'name' => 'Bed Room',
                'store_id' => 2,
            ],
            [
                'id' => 4,
                'image' => 'http://127.0.0.1:8000/images/seeder/category/LivingRoom.png',
                'name' => 'Living Room',
                'store_id' => 1,
            ],
            [
                'id' => 5,
                'image' => 'http://127.0.0.1:8000/images/seeder/category/BedRoom.png',
                'name' => 'Sofa',
                'store_id' => 1,
            ],
            [
                'id' => 6,
                'image' => 'http://127.0.0.1:8000/images/seeder/category/BedRoom.png',
                'name' => 'Bed Room',
                'store_id' => 1,
            ],
            [
                'id' => 7,
                'image' => 'http://127.0.0.1:8000/images/seeder/category/kitchen.png',
                'name' => ' Kitchen',
                'store_id' => 1,
            ],
            [
                'id' => 8,
                'image' => 'http://127.0.0.1:8000/images/seeder/category/LivingRoom.png',
                'name' => 'Living Room',
                'store_id' => 2,
            ],
        ]);
    }
}
