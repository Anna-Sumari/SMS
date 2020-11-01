<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaches', function (Blueprint $table) {
            $table->integer('schoolID')->index('schoolID_idx');
            $table->integer('SubjectID');
            $table->string('classID', 30)->index('classID_idx');
            $table->integer('staffID')->index('staffID_idx');
            $table->primary(['SubjectID', 'classID', 'staffID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teaches');
    }
}
