<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5cb62dfe25ef5ProductProductCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('product_product_category')) {
            Schema::create('product_product_category', function (Blueprint $table) {
                $table->integer('product_id')->unsigned()->nullable();
                $table->foreign('product_id', 'fk_p_293050_293048_produc_5cb62dfe26042')->references('id')->on('products')->onDelete('cascade');
                $table->integer('product_category_id')->unsigned()->nullable();
                $table->foreign('product_category_id', 'fk_p_293048_293050_produc_5cb62dfe2611d')->references('id')->on('product_categories')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_product_category');
    }
}
