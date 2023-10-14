<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbluserChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbluser_churches', function (Blueprint $table) {
            $table->bigIncrements('UserChurchId');
            $table->bigInteger('ChurchId')->nullable();
            $table->bigInteger('UserId')->nullable();
            $table->integer('AssignedBy')->nullable();
            $table->timestamp('AssignedDated')->nullable();
            $table->integer('UpdatedBy')->nullable();
            $table->timestamp('UpdatedAt')->nullable();
            $table->boolean('mDelete')->default('0');
            $table->boolean('isActive')->default('1');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbluser_churches');
    }
}
