<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWorksInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('works_in', function (Blueprint $table) {
            $table->foreign('schoolID', 'works_in_ibfk_1')->references('schoolID')->on('school')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('DepartmentID', 'works_in_ibfk_2')->references('departmentID')->on('department')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('StaffID', 'works_in_ibfk_3')->references('staffID')->on('staff')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('works_in', function (Blueprint $table) {
            $table->dropForeign('works_in_ibfk_1');
            $table->dropForeign('works_in_ibfk_2');
            $table->dropForeign('works_in_ibfk_3');
        });
    }
}
