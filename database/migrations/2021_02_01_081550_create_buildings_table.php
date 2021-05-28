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
            $table->string('buildingName')->nullable();//ชื่อโปรเจ็ค
            $table->string('fmCode')->nullable();//fmCode
            $table->string('nameNiti')->nullable(); //ชื่อนิติบุลคล
            $table->string('phoneNiti')->nullable(); //เบอร์โทรนิติบุคคล
            $table->string('mailNiti')->nullable(); //เมล์ินิติบุคคล
            $table->string('nameManager')->nullable(); //ชื่อผู้จัดการ
            $table->string('phoneManager')->nullable(); //เบอร์โทรผู้จัดการ
            $table->string('mailManager')->nullable(); //เมล์ผู้จัดการ
            $table->string('houseNumber')->nullable(); //บ้านเลขที่
            $table->integer('squadNumber')->nullable(); //หมู่
            $table->string('alleyName')->nullable(); //ซอย
            $table->string('roadName')->nullable(); //ถนน
            $table->string('districtName')->nullable(); //ตำบล/แขวง
            $table->string('provinceName')->nullable(); //จังหวัด
            $table->string('countyName')->nullable(); //อำเภอ/เขต
            $table->integer('postalCode')->nullable(); //รหัสไปสษณี

            $table->string('contractSell')->nullable(); //Sallดูแลสัญญา
            $table->date('contractDate')->nullable(); //วันลงนามสัญญา
            $table->time('contractTime')->nullable(); //เวลาลงนามสัญญา
            $table->string('spendSpace')->nullable(); //รูปแบบสัญญา
            $table->string('condition')->nullable(); //ผลตอบแทน
            $table->date('contractPeriod')->nullable(); //ระยะเวลาสัญญา
            $table->date('contractStartDate')->nullable(); //วันเริ่มต้นสัญญา
            $table->date('contractExpirationDate')->nullable(); //วันสิ้นสุดสัญญา

            $table->string('team')->nullable();//ทีมช่าง team
            $table->string('nameTechnician')->nullable(); //ชื่อช่าง
            $table->string('phoneTechnician')->nullable(); //เบอร์ช่าง
            $table->string('mailTechnicianName')->nullable(); //เมลล์ช่าง
            $table->string('areaN')->nullable(); //พื้นที่.
            $table->string('bbN')->nullable(); //บ.บ.น.
            $table->string('area3BB')->nullable(); //พื้นที่.3bb
            $table->string('areaTrue')->nullable(); //พื้นที่.True

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
