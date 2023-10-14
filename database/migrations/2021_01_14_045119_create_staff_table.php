<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            // $table->id();
             $table->bigIncrements('id');
             $table->string('title');
             $table->string('description')->nullable();
             $table->string('imageUrl')->nullable(); 
             $table->string('type')->nullable();
             $table->string('category')->nullable();
             $table->string('status');
             $table->string('display');
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
        Schema::dropIfExists('staff');
    }
}
