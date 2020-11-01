<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works_in', function (Blueprint $table) {
            $table->integer('schoolID')->index('schoolID_idx');
            $table->integer('DepartmentID');
            $table->integer('StaffID')->index('StaffID_idx');
            $table->primary(['DepartmentID', 'StaffID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works_in');
    }
}
