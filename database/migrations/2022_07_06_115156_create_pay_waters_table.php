<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayWatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_waters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('water_id')->unsigned();
            $table->integer('price');
            $table->string('image')->nullable();
            $table->string('detail')->nullable();
            $table->timestamps();
        });
        Schema::table('pay_waters', function (Blueprint $table) {
            $table->foreign('water_id')->references('id')->on('waters')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay_waters');
    }
}
