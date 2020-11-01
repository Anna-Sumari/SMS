<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToParentGuardianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parent_guardian', function (Blueprint $table) {
            $table->foreign('schoolID', 'parent_guardian_ibfk_1')->references('schoolID')->on('school')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('studentID', 'parent_guardian_ibfk_2')->references('studentID')->on('student')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parent_guardian', function (Blueprint $table) {
            $table->dropForeign('parent_guardian_ibfk_1');
            $table->dropForeign('parent_guardian_ibfk_2');
        });
    }
}
