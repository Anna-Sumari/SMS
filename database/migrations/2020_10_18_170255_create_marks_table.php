<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->integer('schoolID')->index('schoolID_idx');
            $table->integer('studentID')->index('studentID');
            $table->integer('testTypeID')->index('testTypeID_idx');
            $table->integer('subjectID')->index('subjectID_idx');
            $table->integer('mark')->nullable();
            $table->integer('termID')->index('termID_idx');
            $table->string('status', 10)->default('active');
            $table->primary(['schoolID', 'studentID', 'subjectID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
