<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialaidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financialaid', function (Blueprint $table) {
            $table->integer('requestID', true);
            $table->integer('schoolID')->index('schoolID_idx');
            $table->integer('studentID')->index('studentID_idx');
            $table->string('type', 15);
            $table->string('requestStatus', 45)->nullable();
            $table->integer('amountApproved')->nullable();
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
        Schema::dropIfExists('financialaid');
    }
}
