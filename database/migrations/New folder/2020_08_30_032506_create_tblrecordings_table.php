<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblrecordingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblrecordings', function (Blueprint $table) {
            $table->bigIncrements('RecordingId');
            $table->string('RecordingName');
            $table->string('RecordingURL');
			$table->string('RecordingDate')->nullable();
			$table->string('RecordingTime')->nullable();
			$table->integer('ChurchId')->nullable();
            $table->boolean('mDelete')->nullable();
			$table->boolean('isActive')->nullable();
            $table->integer('CreatedBy')->nullable();
            $table->integer('UpdatedBy')->nullable();
            $table->rememberToken();
            $table->timestamp('CreatedAt');
			$table->timestamp('UpdatedAt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblrecordings');
    }
}
