<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marks', function (Blueprint $table) {
            $table->foreign('schoolID', 'marks_ibfk_1')->references('schoolID')->on('school')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('studentID', 'marks_ibfk_2')->references('studentID')->on('student')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('subjectID', 'marks_ibfk_3')->references('subjectID')->on('subject')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('termID', 'marks_ibfk_4')->references('termID')->on('terms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('testTypeID', 'marks_ibfk_5')->references('testTypeID')->on('testtype')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marks', function (Blueprint $table) {
            $table->dropForeign('marks_ibfk_1');
            $table->dropForeign('marks_ibfk_2');
            $table->dropForeign('marks_ibfk_3');
            $table->dropForeign('marks_ibfk_4');
            $table->dropForeign('marks_ibfk_5');
        });
    }
}
