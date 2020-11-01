<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystempaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systempayments', function (Blueprint $table) {
            $table->integer('systemPaymentID', true);
            $table->integer('schoolID')->index('schoolID_idx');
            $table->string('paymentMethod', 45);
            $table->integer('paidAmountSys');
            $table->integer('Balance');
            $table->primary(['systemPaymentID', 'schoolID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systempayments');
    }
}
