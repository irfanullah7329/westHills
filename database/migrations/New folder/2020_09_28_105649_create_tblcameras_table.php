<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcameras', function (Blueprint $table) {
            $table->bigIncrements('CameraId');
            $table->integer('ChurchId');
            $table->string('CameraName');
            $table->string('CameraUrl');
            $table->string('RtspPort')->nullable();
            $table->string('HttpPort')->nullable();
            $table->string('CameraSlug');
            $table->string('CameraType')->nullable();
            $table->string('StreamingProtocol')->nullable();
            $table->integer('ServerId')->nullable();
            $table->string('App');
            $table->boolean('mDelete')->nullable();
            $table->integer('CreatedBy')->nullable();
            $table->integer('UpdatedBy')->nullable();
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
        Schema::dropIfExists('tblcameras');
    }
}
