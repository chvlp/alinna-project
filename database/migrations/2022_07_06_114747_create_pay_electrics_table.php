<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayElectricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_electrics', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('electric_id')->unsigned();
            $table->integer('price');
            $table->string('image')->nullable();
            $table->string('detail')->nullable();
            $table->timestamps();
        });
        Schema::table('pay_electrics', function (Blueprint $table) {
            $table->foreign('electric_id')->references('id')->on('electrics')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay_electrics');
    }
}
