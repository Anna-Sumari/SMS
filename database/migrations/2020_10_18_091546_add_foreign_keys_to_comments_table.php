<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('schoolID', 'comments_ibfk_1')->references('schoolID')->on('school')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('streamName', 'comments_ibfk_3')->references('streamName')->on('stream')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('studentID', 'comments_ibfk_4')->references('studentID')->on('student')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('comments_ibfk_1');
            $table->dropForeign('comments_ibfk_3');
            $table->dropForeign('comments_ibfk_4');
        });
    }
}
