<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('buildingName')->nullable(); //ชื่ออาคารในตาราง project
            $table->string('fmProgress')->nullable();
            $table->timestamp('dateFm')->nullable();
            $table->string('totProgress')->nullable();
            $table->timestamp('dateTot')->nullable();
            $table->string('aisProgress')->nullable();
            $table->timestamp('dateAis')->nullable();
            $table->string('progress3bb')->nullable();
            $table->timestamp('date3BB')->nullable();
            $table->string('sinetProgress')->nullable();
            $table->timestamp('dateSinet')->nullable();
            $table->string('fnProgress')->nullable();
            $table->timestamp('dateFn')->nullable();
            $table->string('trueProgress')->nullable();
            $table->timestamp('dateTrue')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress');
    }
}
