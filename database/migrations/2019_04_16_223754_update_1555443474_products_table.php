<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1555443474ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            if(Schema::hasColumn('products', 'name')) {
                $table->dropColumn('name');
            }
            if(Schema::hasColumn('products', 'description')) {
                $table->dropColumn('description');
            }
            if(Schema::hasColumn('products', 'price')) {
                $table->dropColumn('price');
            }
            if(Schema::hasColumn('products', 'photo2')) {
                $table->dropColumn('photo2');
            }
            if(Schema::hasColumn('products', 'photo3')) {
                $table->dropColumn('photo3');
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
        Schema::table('products', function (Blueprint $table) {
                        $table->string('name')->nullable();
                $table->text('description')->nullable();
                $table->decimal('price', 15, 2)->nullable();
                $table->string('photo2')->nullable();
                $table->string('photo3')->nullable();
                
        });

    }
}
