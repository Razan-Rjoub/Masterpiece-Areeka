<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'Role'=>'admin',
        ]);
        DB::table('users')->insert([
            ['name' => 'Razan',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('Razan1234$'),
            'image'=>'http://127.0.0.1:8000/images/istockphoto-1130884625-612x612.jpg
            ',
            'Role'=>'user',],
            ['name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('Razan1234$'),
            'image'=>'http://127.0.0.1:8000/images/istockphoto-1130884625-612x612.jpg
            ',
            'Role'=>'customer',],
            ['name' => 'Jennifer',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('Razan1234$'),
            'image'=>'http://127.0.0.1:8000/images/istockphoto-1130884625-612x612.jpg
            ',
            'Role'=>'customer',],
            ['name' => 'Mike',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('Razan1234$'),
            'image'=>'http://127.0.0.1:8000/images/istockphoto-1130884625-612x612.jpg
            ',
            'Role'=>'customer',],
            ['name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('Razan1234$'),
            'image'=>'http://127.0.0.1:8000/images/istockphoto-1130884625-612x612.jpg
            ',
            'Role'=>'customer',],
        ]);
        
    }
}
