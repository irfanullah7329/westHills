<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblserversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblservers', function (Blueprint $table) {
            $table->bigIncrements('ServerId');
            $table->string('ServerIP');
            $table->string('ServerName');
            $table->string('ServerUrl')->nullable();
            $table->boolean('IsActive')->default('1');
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
        Schema::dropIfExists('tblservers');
    }
}
