<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name_surname', 255);
            $table->string('phone_number', 255);
            $table->string('address', 255);
            $table->integer('city_id');
            $table->integer('status_id');
            $table->decimal('price', 9, 2);
            $table->integer('payment_method_id');
            $table->string('note', 255)->nullable();
            $table->boolean('control_allowed');
            $table->boolean('payment_on_door');
            $table->integer('shipping_company_id');
            $table->integer('user_id');
            $table->string('track_code');
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
