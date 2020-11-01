<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->integer('schoolID')->index('schoolID_idx');
            $table->integer('commentID')->primary();
            $table->integer('studentID')->index('studentID_idx');
            $table->string('commentST')->nullable();
            $table->string('commentAM')->nullable();
            $table->string('streamName', 30)->index('streamID_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
