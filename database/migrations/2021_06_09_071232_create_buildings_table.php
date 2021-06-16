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
            $table->bigIncrements('id');
            $table->string('projectName')->nullable();//ชื่อโปรเจ็ค
            $table->string('buildingSum')->nullable();//จำนวนตึก
            $table->string('floorSum')->nullable();//จำนวนชั้น
            $table->string('roomSum')->nullable();//จำนวนห้อง
            $table->string('fmCode')->nullable();//fmCode
            $table->string('nameNiti')->nullable(); //ชื่อนิติบุลคล
            $table->string('phoneNiti')->nullable(); //เบอร์โทรนิติบุคคล
            $table->string('mailNiti')->nullable(); //เมล์ินิติบุคคล
            $table->string('nameManager')->nullable(); //ชื่อผู้จัดการ
            $table->string('phoneManager')->nullable(); //เบอร์โทรผู้จัดการ
            $table->string('mailManager')->nullable(); //เมล์ผู้จัดการ

            $table->string('houseNumber')->nullable(); //บ้านเลขที่
            $table->string('squadNumber')->nullable(); //หมู่
            $table->string('alleyName')->nullable(); //ซอย
            $table->string('roadName')->nullable(); //ถนน
            $table->string('districtName')->nullable(); //ตำบล/แขวง
            $table->string('provinceName')->nullable(); //จังหวัด
            $table->string('countyName')->nullable(); //อำเภอ/เขต
            $table->integer('postalCode')->nullable(); //รหัสไปสษณี

            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();

            $table->string('contractSell')->nullable(); //Sallดูแลสัญญา
            $table->date('contractDate')->nullable(); //วันลงนามสัญญา
            $table->string('spendSpace')->nullable(); //รูปแบบสัญญา
            $table->string('condition')->nullable(); //ผลตอบแทน
            $table->string('contractPeriod')->nullable(); //ระยะเวลาสัญญา

            $table->string('areaN')->nullable(); //พื้นที่.
            $table->string('bbN')->nullable(); //บ.บ.น.
            $table->string('area3BB')->nullable(); //พื้นที่.3bb
            $table->string('areaTrue')->nullable(); //พื้นที่.True
            $table->string('areaTrueNew')->nullable();
            $table->string('areaAis')->nullable();
            $table->string('areaFiberNet')->nullable();
            $table->string('operatingTime')->nullable();
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
        Schema::dropIfExists('buildings');
    }
}
