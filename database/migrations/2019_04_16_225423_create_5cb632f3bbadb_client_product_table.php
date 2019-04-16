<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5cb632f3bbadbClientProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('client_product')) {
            Schema::create('client_product', function (Blueprint $table) {
                $table->integer('client_id')->unsigned()->nullable();
                $table->foreign('client_id', 'fk_p_293060_293050_produc_5cb632f3bbc45')->references('id')->on('clients')->onDelete('cascade');
                $table->integer('product_id')->unsigned()->nullable();
                $table->foreign('product_id', 'fk_p_293050_293060_client_5cb632f3bbd18')->references('id')->on('products')->onDelete('cascade');
                
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
        Schema::dropIfExists('client_product');
    }
}
