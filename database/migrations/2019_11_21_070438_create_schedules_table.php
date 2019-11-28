<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->unique();
            $table->string('mon1');
            $table->string('mon2');
            $table->string('mon3');
            $table->string('mon4');
            $table->string('mon5');
            $table->string('mon6');
            $table->string('mon7');
            $table->string('tue1');
            $table->string('tue2');
            $table->string('tue3');
            $table->string('tue4');
            $table->string('tue5');
            $table->string('tue6');
            $table->string('tue7');
            $table->string('wed1');
            $table->string('wed2');
            $table->string('wed3');
            $table->string('wed4');
            $table->string('wed5');
            $table->string('wed6');
            $table->string('wed7');
            $table->string('thu1');
            $table->string('thu2');
            $table->string('thu3');
            $table->string('thu4');
            $table->string('thu5');
            $table->string('thu6');
            $table->string('thu7');
            $table->string('fri1');
            $table->string('fri2');
            $table->string('fri3');
            $table->string('fri4');
            $table->string('fri5');
            $table->string('fri6');
            $table->string('fri7');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
