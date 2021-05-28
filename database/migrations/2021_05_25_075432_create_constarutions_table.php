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
        Schema::create('constarutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('buildingName')->nullable(); //ชื่ออาคารในตาราง building
            $table->string('desingBy')->nullable();
            $table->string('surveyDesing')->nullable(); //survey โดยใคร
            $table->date('surveyDesingDate')->nullable(); //วันออกแบบ survey
            $table->time('surveyDesingDateBy')->nullable(); //เวลาออกแบบ survey

            $table->string('ifcc')->nullable();
            $table->date('ifccDate')->nullable();
            $table->string('wallBox')->nullable();
            $table->date('wallBoxDate')->nullable();

            $table->string('type')->nullable();

            $table->string('microductD')->nullable(); //วาง microduct แนวดิ่ง
            $table->date('microductDateD')->nullable(); //วันวาง microduct แนวดิ่ง

            $table->string('microductK')->nullable(); //วาง microduct แนวขว้าง
            $table->date('microductDateK')->nullable(); //วันวาง microduct แนวขว้าง

            $table->string('fiberConvertion')->nullable(); //วันวาง microduct แนวขว้าง
            $table->date('fiberConvertionDateD')->nullable(); //วันวาง microduct แนวขว้าง

            $table->string('blow')->nullable(); //สถานะ Blow
            $table->string('splice')->nullable(); //สถานะ Splice
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
        Schema::dropIfExists('constarutions');
    }
}
