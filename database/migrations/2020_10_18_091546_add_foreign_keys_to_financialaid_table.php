<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFinancialaidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('financialaid', function (Blueprint $table) {
            $table->foreign('schoolID', 'financialaid_ibfk_1')->references('schoolID')->on('school')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('studentID', 'financialaid_ibfk_2')->references('studentID')->on('student')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('financialaid', function (Blueprint $table) {
            $table->dropForeign('financialaid_ibfk_1');
            $table->dropForeign('financialaid_ibfk_2');
        });
    }
}
