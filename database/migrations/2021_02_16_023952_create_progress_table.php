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
        Schema::enableForeignKeyConstraints();
        Schema::create('progress', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('buildingId')->index();
            $table->string('fmProgress')->nullable();
            $table->date('dateProgress')->nullable();
            $table->string('totProgress')->nullable();
            $table->string('aisProgress')->nullable();
            $table->string('3bbProgress')->nullable();
            $table->string('sinetProgress')->nullable();
            $table->string('fnProgress')->nullable();
            $table->string('trueProgress')->nullable();
            $table->timestamps();

            $table->foreign('buildingId')
                ->references('buildingId')
                ->on('buildings')
                ->onDelete('cascade');
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
        Schema::dropIfExists('progress');
    }
}
