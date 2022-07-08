<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electrics', function (Blueprint $table) {
            $table->id();
            $table->date('indate');
            $table->bigInteger('rentRoom_id')->unsigned();
            $table->bigInteger('member_id')->unsigned();
            $table->string('IDelectric');
            $table->string('before');
            $table->string('after');
            $table->integer('price');
            $table->string('image')->nullable();
            $table->string('status');
            $table->timestamps();
        });
        Schema::table('electrics', function (Blueprint $table) {
            $table->foreign('rentRoom_id')->references('id')->on('rent_rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electrics');
    }
}
