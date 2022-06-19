<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('type_id')->unsigned();
            $table->string('number');
            $table->string('floor');
            $table->string('price');
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('rooms', function (Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('type_rooms')->onDelete('cascade')->onUpdate('cascade');
        });
    }
        

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
