<?php

use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'photo1' => '/tmp/php9yJVJI', 'album_id' => null,],

        ];

        foreach ($items as $item) {
            \App\Product::create($item);
        }
    }
}
