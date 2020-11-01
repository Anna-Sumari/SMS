<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStreamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stream', function (Blueprint $table) {
            $table->foreign('classID', 'stream_ibfk_1')->references('classID')->on('class')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('schoolID', 'stream_ibfk_2')->references('schoolID')->on('school')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('streamTeacherID', 'stream_ibfk_3')->references('staffID')->on('staff')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stream', function (Blueprint $table) {
            $table->dropForeign('stream_ibfk_1');
            $table->dropForeign('stream_ibfk_2');
            $table->dropForeign('stream_ibfk_3');
        });
    }
}
