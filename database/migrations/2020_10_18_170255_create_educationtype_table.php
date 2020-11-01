<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educationtype', function (Blueprint $table) {
            $table->integer('schoolID')->index('schoolID_idx');
            $table->string('educationName', 15)->comment('this is for the levels of the school eg secondary, primary, nursery to distinguish schools that dont offer all ');
            $table->primary(['schoolID', 'educationName']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educationtype');
    }
}
