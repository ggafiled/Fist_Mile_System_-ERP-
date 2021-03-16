<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('customerId')->after('id')->nullable();
            $table->string('position')->after('remember_token')->nullable();
            $table->string('dateofbirth')->after('position')->nullable();
            $table->string('address')->after('dateofbirth')->nullable();
            $table->string('phoneCustomer')->after('address')->nullable();
            $table->string('salary')->after('phoneCustomer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
