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
            $table->id();
            $table->string('surveyDesign');
            $table->string('ifcc');
            $table->string('wallBox');
            $table->string('microDuct');
            $table->string('icroDuct');
            $table->string('dateSign');
            $table->string('fmProgress');
            $table->string('dateNetwork');
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
