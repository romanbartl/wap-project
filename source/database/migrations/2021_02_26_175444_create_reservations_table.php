<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('reservation');
            $table->date('reservation_till');
            $table->integer('fine')->default(0);
            $table->integer('invoice_id');
            $table->integer('price');
            $table->boolean('returned')->default(false);
            $table->boolean('paid');
            $table->boolean('issued')->default(false);
            $table->dateTime('created_at');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('discount_id')->unsigned();
            $table->bigInteger('item_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
