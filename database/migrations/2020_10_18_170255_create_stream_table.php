<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stream', function (Blueprint $table) {
            $table->integer('schoolID')->index('schoolID_idx');
            $table->string('classID', 30)->index('classID_idx');
            $table->string('streamName', 30)->primary();
            $table->integer('streamTeacherID')->index('streamTeacherID_idx');
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
        Schema::dropIfExists('stream');
    }
}
