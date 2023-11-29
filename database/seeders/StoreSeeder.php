<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('stores')->insert([
            ['id'=>1,
            'image' => 'http://127.0.0.1:8000/images/seeder/stores/Gurfatiy.jpg',
            'name' => 'Gurfatiy',
            'totalproduct' => 10,
            'totalearning' => 6000,],
            ['id'=>2,
            'image' => 'http://127.0.0.1:8000/images/seeder/stores/meem.jpg',
            'name' => 'Meem',
            'totalproduct' => 10,
            'totalearning' => 6000,],
            ['id'=>3,
            'image' => 'http://127.0.0.1:8000/images/seeder/stores/Shahwan.png',
            'name' => 'Shahwan',
            'totalproduct' => 10,
            'totalearning' => 6000,],
            ['id'=>4,
            'image' => 'http://127.0.0.1:8000/images/seeder/stores/Furniture-city.jpg',
            'name' => 'Furniture City',
            'totalproduct' => 5,
            'totalearning' => 4000,],
            ['id'=>5,
            'image' => 'http://127.0.0.1:8000/images/seeder/stores/Yuban.png',
            'name' => 'Yuban',
            'totalproduct' => 10,
            'totalearning' => 6000,],
            ['id'=>6,
            'image' => 'http://127.0.0.1:8000/images/seeder/stores/lecasa.png',
            'name' => 'Le CASA',
            'totalproduct' => 10,
            'totalearning' => 6000,],
        ]);
    }
}
