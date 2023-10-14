<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblchurchSetupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblchurch_setup', function (Blueprint $table) {
            $table->bigIncrements('ChurchSetUpId');
            $table->string('SelectServer');
            $table->string('InternetProvider');
            $table->string('RouterModel');
            $table->string('RouterUserName');
            $table->string('RouterPassword');
            $table->integer('ChurchId');
            $table->boolean('Aerials')->default('1');
            $table->boolean('Switch')->default('1');
            $table->boolean('HomePlugs')->default('1');
            $table->boolean('DirectWire')->default('1');
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
        Schema::dropIfExists('tblchurch_setup');
    }
}
