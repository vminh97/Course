<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->float('total_amount');
            $table->bigInteger('total_quanity');
            $table->varchar('shipper_on');
            $table->integer('status');
            $table->text('comment');
            $table->varchar('payment_method');
            $table->varchar('customer_birthday');
            $table->varchar('customer_code');
            $table->varchar('customer_name');
            $table->varchar('customer_phone');
            $table->varchar('customer_email');
            $table->varchar('receiver_name');
            $table->varchar('receiver_phone');
            $table->varchar('receiver_email');
            $table->varchar('receiver_address');
            $table->varchar('receiver_city');
            $table->varchar('receiver_provice');
            $table->varchar('receiver_tower');
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
        Schema::dropIfExists('orders');
    }
}
