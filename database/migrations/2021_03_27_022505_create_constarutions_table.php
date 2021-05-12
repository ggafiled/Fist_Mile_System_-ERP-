<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstarutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('constarutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('building_id')->unsigned(); //ชื่ออาคารในตาราง building
            $table->string('surveyDesing')->nullable(); //survey โดยใคร
            $table->timestamp('surveyDesingDate')->nullable(); //วันออกแบบ survey
            $table->timestamp('surveyDesingDateBy')->nullable(); //เวลาออกแบบ survey

            $table->string('ifcc')->nullable();
            $table->timestamp('ifccDate')->nullable();
            $table->string('wallBox')->nullable();
            $table->timestamp('wallBoxDate')->nullable();

            $table->string('type')->nullable();

            $table->string('microductD')->nullable(); //วาง microduct แนวดิ่ง
            $table->timestamp('microductDateD')->nullable(); //วันวาง microduct แนวดิ่ง

            $table->string('microductK')->nullable(); //วาง microduct แนวขว้าง
            $table->timestamp('microductDateK')->nullable(); //วันวาง microduct แนวขว้าง

            $table->string('fiberConvertion')->nullable(); //วันวาง microduct แนวขว้าง
            $table->timestamp('fiberConvertionDateD')->nullable(); //วันวาง microduct แนวขว้าง

            $table->string('blow')->nullable(); //สถานะ Blow
            $table->string('splice')->nullable(); //สถานะ Splice
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('building_id')
            ->references('id')
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
        Schema::dropIfExists('constarutions');
    }
}
