<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblschedules', function (Blueprint $table) {
            $table->bigIncrements('ScheduleId');
            $table->string('ScheduleEventName');
            $table->string('ScheduleEventDate')->nullable();
            $table->string('ScheduleEventDay');
			$table->string('ScheduleEventTime');
			$table->integer('ChurchId');
            $table->boolean('mDelete')->default('0');
            $table->integer('CreatedBy')->nullable();
            $table->integer('UpdatedBy')->nullable();
            $table->rememberToken();
            $table->timestamp('CreatedAt');
			$table->timestamp('UpdatedAt')->nullable();
        });
    }


    //

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblschedules');
    }
}
