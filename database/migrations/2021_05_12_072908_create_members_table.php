<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('building_id')->unsigned();//ขื่ออาคาร
            $table->string('nameMember')->nullable();//ชื่อเจ้าของห้อง
            $table->string('surnameMember')->nullable();//นามสกุล
            $table->string('phoneMember')->nullable();//เบอร์โทรศัพ
            $table->string('isp')->nullable();//ค่ายเน้ตที่ติด
            $table->string('roomNumber')->nullable();
            $table->string('floorNumber')->nullable();
            $table->string('buildingNumber')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('members');
    }
}
