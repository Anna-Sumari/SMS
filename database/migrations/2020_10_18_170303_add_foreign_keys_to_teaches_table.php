<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTeachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teaches', function (Blueprint $table) {
            $table->foreign('classID', 'teaches_ibfk_1')->references('classID')->on('class')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('schoolID', 'teaches_ibfk_2')->references('schoolID')->on('school')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('staffID', 'teaches_ibfk_3')->references('staffID')->on('staff')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('SubjectID', 'teaches_ibfk_4')->references('subjectID')->on('subject')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('staffID', 'teaches_ibfk_5')->references('staffID')->on('staff')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teaches', function (Blueprint $table) {
            $table->dropForeign('teaches_ibfk_1');
            $table->dropForeign('teaches_ibfk_2');
            $table->dropForeign('teaches_ibfk_3');
            $table->dropForeign('teaches_ibfk_4');
            $table->dropForeign('teaches_ibfk_5');
        });
    }
}
