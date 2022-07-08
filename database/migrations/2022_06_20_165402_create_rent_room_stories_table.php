<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentRoomStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_room_stories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rentRoom_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->date('intodate');
            $table->date('outdate');
            $table->integer('qtyday')->nullable();
            $table->integer('price')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::table('rent_room_stories', function (Blueprint $table) {
            $table->foreign('rentRoom_id')->references('id')->on('rent_rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rent_room_stories');
    }
}
