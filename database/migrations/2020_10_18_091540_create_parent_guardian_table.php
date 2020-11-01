<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentGuardianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_guardian', function (Blueprint $table) {
            $table->integer('schoolID')->index('schoolID_idx');
            $table->string('parentFname', 45);
            $table->string('parentMname', 45);
            $table->string('parentLname', 45);
            $table->integer('studentID')->index('StudentID_idx');
            $table->string('relationship', 45);
            $table->string('phoneNumber', 15);
            $table->string('Address', 45);
            $table->primary(['parentFname', 'parentMname', 'parentLname', 'studentID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent_guardian');
    }
}
