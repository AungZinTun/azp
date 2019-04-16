<?php

use Illuminate\Database\Seeder;

class ProductCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Cat 1', 'description' => 'cat1', 'photo' => null,],

        ];

        foreach ($items as $item) {
            \App\ProductCategory::create($item);
        }
    }
}
