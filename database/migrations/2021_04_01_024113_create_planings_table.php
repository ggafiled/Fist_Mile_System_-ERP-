<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('planings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('lastName')->nullable();
            $table->integer('phoneNumber1')->nullable();
            $table->integer('phoneNumber2')->nullable();
            $table->string('buildingId')->nullable();
            $table->string('numberLayer')->nullable();
            $table->integer('floor')->nullable();
            $table->string('roomNumber')->nullable();
            $table->string('isp')->nullable();
            $table->string('ispCode')->nullable();
            $table->integer('memberNumber')->nullable();
            $table->string('Fees')->nullable();
            $table->string('confirming')->nullable();
            $table->string('Team')->nullable();
            $table->string('remark')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('status')->nullable();
            $table->string('subStatus')->nullable();
            $table->date('dateConnect')->nullable();
            $table->date('dateDisconnect')->nullable();
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
        Schema::dropIfExists('planings');
    }
}
