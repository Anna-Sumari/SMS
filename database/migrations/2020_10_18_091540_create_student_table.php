<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->integer('schoolID')->index('schoolID_idx');
            $table->integer('studentID')->primary();
            $table->string('streamName', 30)->index('streamName_idx');
            $table->string('studentFName', 45);
            $table->string('studentMName', 45);
            $table->string('studentLName', 45);
            $table->char('studentGender', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
