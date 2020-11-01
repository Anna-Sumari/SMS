<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school', function (Blueprint $table) {
            $table->integer('schoolID', true);
            $table->string('schoolName');
            $table->string('physicalAddress');
            $table->string('schoolEmail', 45)->nullable()->default('school@something.com')->unique('schoolEmail_UNIQUE');
            $table->string('schoolPhone', 15)->unique('schoolContact_UNIQUE');
            $table->integer('noOfInstallments');
            $table->string('status', 10)->default('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school');
    }
}
