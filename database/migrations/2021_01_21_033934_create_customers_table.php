<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id_customer');
            $table->varchar('customer_name');
            $table->text('image_customer');
            $table->dateTime('birthday');
            $table->varchar('address');
            $table->varchar('email');
            $table->boolean('isactive');
            $table->tinyint('status');
            $table->varchar('first_name');
            $table->varchar('last_name');
            $table->integer('phone',11);
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
        Schema::dropIfExists('customers');
    }
}
