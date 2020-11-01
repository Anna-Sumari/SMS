<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('department', function (Blueprint $table) {
            $table->foreign('schoolID', 'department_ibfk_1')->references('schoolID')->on('school')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('headOfDepartmentID', 'department_ibfk_2')->references('staffID')->on('staff')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('department', function (Blueprint $table) {
            $table->dropForeign('department_ibfk_1');
            $table->dropForeign('department_ibfk_2');
        });
    }
}
