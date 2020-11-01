<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStudentpaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('studentpayment', function (Blueprint $table) {
            $table->foreign('schoolID', 'studentpayment_ibfk_1')->references('schoolID')->on('school')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('studentID', 'studentpayment_ibfk_2')->references('studentID')->on('student')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('studentpayment', function (Blueprint $table) {
            $table->dropForeign('studentpayment_ibfk_1');
            $table->dropForeign('studentpayment_ibfk_2');
        });
    }
}
