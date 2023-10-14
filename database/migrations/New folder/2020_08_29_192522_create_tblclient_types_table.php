<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblclientTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblclient_types', function (Blueprint $table) {
            
            $table->increments('ClientTypeId');
            $table->string('ClientTypeTitle');
			$table->string('Slug');
			$table->boolean('mDelete')->default('0');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblclient_types');
    }
}
