<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->integer('staffID', true);
            $table->integer('schoolID')->index('schoolID_idx');
            $table->string('staffFname', 25);
            $table->string('staffMname', 25);
            $table->string('staffLname', 25);
            $table->char('staffGender', 1);
            $table->string('staffAddress', 100);
            $table->string('staffTitle', 50);
            $table->string('status', 10)->default('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
