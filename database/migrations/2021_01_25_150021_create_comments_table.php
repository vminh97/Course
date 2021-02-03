<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('comments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('goods_code');
                $table->integer('customer_id')->unsigned();
                $table->foreign('customer_id')->references('id')->on('customers');
                $table->integer('product_id')->unsigned();
                $table->foreign('product_id')->references('id')->on('products');
                $table->string('customers_code');
                $table->string('customers_name');
                $table->text('content_comment');
                $table->integer('star_comment');
                $table->text('comment_image');
                $table->string('status');
                $table->boolean('isPublic');
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
        Schema::dropIfExists('comments');
    }
}
