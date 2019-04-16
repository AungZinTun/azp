<?php

use Illuminate\Database\Seeder;

class AlbumSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'New Album', 'description' => 'My New ',],

        ];

        foreach ($items as $item) {
            \App\Album::create($item);
        }
    }
}
