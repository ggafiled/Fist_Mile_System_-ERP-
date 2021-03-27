<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnProgress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('progress', function (Blueprint $table) {
            $table->date('totDate')->after('totProgress')->nullable();
            $table->date('aisDate')->after('aisProgress')->nullable();
            $table->date('3bbDate')->after('Progress3bb')->nullable();
            $table->date('sinetDate')->after('sinetProgress')->nullable();
            $table->date('fnDate')->after('fnProgress')->nullable();
            $table->date('trueDate')->after('trueProgress')->nullable();
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
