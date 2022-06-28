<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayRentRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_rent_rooms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('payRentRoom_id')->unsigned();
            $table->integer('price');
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::table('pay_rent_rooms', function (Blueprint $table) {
            $table->foreign('payRentRoom_id')->references('id')->on('rent_room_stories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay_rent_rooms');
    }
}
