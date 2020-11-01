<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTesttypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testtype', function (Blueprint $table) {
            $table->foreign('schoolID', 'testtype_ibfk_1')->references('schoolID')->on('school')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testtype', function (Blueprint $table) {
            $table->dropForeign('testtype_ibfk_1');
        });
    }
}
