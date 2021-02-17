<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProgressBuilding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->string('buildingId');
            $table->string('fmProgress');
            $table->date('dateProgress');
            $table->string('totProgress');
            $table->string('aisProgress');
            $table->string('3bbProgress');
            $table->string('sinetProgress');
            $table->string('fnProgress');
            $table->string('trueProgress');
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
        Schema::dropIfExists('progress');
    }
}
