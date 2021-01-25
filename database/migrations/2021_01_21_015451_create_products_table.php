<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_product');
            $table->string('goods_code');
            $table->text('slug_url');
            $table->string('name_product');
            $table->string('introduction_product');
            $table->string('content_product');
            $table->string('title_procduct');
            $table->integer('teacher_id');
            $table->integer('brand_id');
            $table->string('name_brand');
            $table->integer('price');
            $table->integer('price_no_tax');
            $table->integer('price_offsale');
            $table->integer('price_offsale_no_tax');
            $table->varchar('product_image');
            $table->text('product_image_text');
            $table->text('video');
            $table->varchar('material_name');
            $table->varchar('hashtag_name');
            $table->text('search_keywords');
            $table->text('list_image');
            $table->boolean('isPublic');
            $table->boolean('isRefund');
            $table->boolean('isCertification');
            $table->boolean('isOnlinePayment');
            $table->boolean('isRate');
            $table->boolean('isFreeShip');
            $table->dateTime('timeRefund');
            $table->integer('count_video');
            $table->varchar('sum_time_video');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->integer('count_discount');
            $table->varchar('discount_code');
            $table->varchar('activation code');
            $table->dateTime('date_promotion_start');
            $table->dateTime('date_promotion_end');
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
        Schema::dropIfExists('products');
    }
}
