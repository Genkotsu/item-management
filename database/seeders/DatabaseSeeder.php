<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Fruit::create([
            'id' => '1',
            'name' => '果物',
            
        ]);

        Fruit::create([
            'id' => '2',
            'name' => '果物',
        ]);

        Fruit::create([
            'name' => 'みかん',
            'color' => '黄',
            'price' => '110',
        ]);
    
}
