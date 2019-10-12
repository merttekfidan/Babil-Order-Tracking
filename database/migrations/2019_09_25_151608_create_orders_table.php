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
            $table->string('name', 255);
            $table->string('surname', 255);
            $table->string('phone_number', 255);
            $table->string('address', 255);
            $table->integer('cities_id');
            $table->string('product_code', 255);
            $table->decimal('price', 9, 2);
            $table->integer('statuses_id');
            $table->string('note', 255)->nullable();
            $table->integer('payment_methods_id');
            $table->boolean('control_allowed');
            $table->boolean('payment_on_door');
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
