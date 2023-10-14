<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblchurchmediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblchurchmedia', function (Blueprint $table) {
            $table->bigIncrements('ChurchMediaId');
            $table->string('TabName')->nullable();
            $table->string('MediaType');
            $table->string('MediaURL')->nullable();
            $table->string('MediaName')->nullable();
            $table->bigInteger('ChurchId');
            $table->boolean('mDelete')->default('0');
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
        Schema::dropIfExists('tblchurchmedia');
    }
}
