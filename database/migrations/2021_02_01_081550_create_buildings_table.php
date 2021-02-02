<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->string('building');
            $table->string('fmCode');
            $table->string('contactName');
            $table->string('phone');
            $table->string('area');
            $table->integer('numberLayer');
            $table->integer('floor');
            $table->string('roomNumber');
            $table->string('detailAdress');
            $table->string('province');
            $table->string('city');
            $table->integer('postalCode');
            $table->string('zone');
            $table->double('latitude');
            $table->double('longtude');
            $table->string('priceSquare');
            $table->string('workingTime');
            $table->string('blance');
            $table->string('developer');
            $table->string('grade');
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
        Schema::dropIfExists('buildings');
    }
}
