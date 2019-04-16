<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5cb62fd191da2RelationshipsToProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function(Blueprint $table) {
            if (!Schema::hasColumn('products', 'album_id')) {
                $table->integer('album_id')->unsigned()->nullable();
                $table->foreign('album_id', '293050_5cb62fce2a5de')->references('id')->on('albums')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table) {
            
        });
    }
}
