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
        Schema::enableForeignKeyConstraints();
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buildingId')->index();
            $table->string('fmCode')->nullable();
            $table->string('contactName')->nullable();
            $table->string('phone')->nullable();
            $table->string('area')->nullable();
            $table->integer('numberLayer')->nullable();
            $table->integer('floor')->nullable();
            $table->string('roomNumber')->nullable();
            $table->string('detailAdress')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->integer('postalCode')->nullable();
            $table->string('zone')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longtude')->nullable();
            $table->string('priceSquare')->nullable();
            $table->string('workingTime')->nullable();
            $table->string('blance')->nullable();
            $table->string('developer')->nullable();
            $table->string('grade')->nullable();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('buildings');
    }
}