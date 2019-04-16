<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(AlbumSeed::class);
        $this->call(ProductCategorySeed::class);
        $this->call(ProductSeed::class);
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);

    }
}
