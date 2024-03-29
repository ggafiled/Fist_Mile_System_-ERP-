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
            $table->string('projectName')->nullable();
            $table->string('fmProgress')->nullable();
            $table->date('dateFm')->nullable();
            $table->string('totProgress')->nullable();
            // $table->date('dateTot')->nullable();
            $table->string('aisProgress')->nullable();
            // $table->date('dateAis')->nullable();
            $table->string('progress3bb')->nullable();
            // $table->date('date3BB')->nullable();
            $table->string('sinetProgress')->nullable();
            // $table->date('dateSinet')->nullable();
            $table->string('fnProgress')->nullable();
            // $table->date('dateFn')->nullable();
            $table->string('trueProgress')->nullable();
            // $table->date('dateTrue')->nullable();
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
