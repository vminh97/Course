<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->increments('id_orderdetail');
            $table->integer('id_order');
            $table->varchar('ordercode');
            $table->integer('id_product');
            $table->varchar('goods_code');
            $table->integer('quantity');
            $table->bigInteger('sale_price');
            $table->varchar('product_image');
            $table->tinyint('isCancer');
            $table->bigInteger('product_price');
            $table->bigInteger('product_price_sale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}
