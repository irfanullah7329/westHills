<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblchurches', function (Blueprint $table) {
            $table->bigIncrements('ChurchId');
            $table->string('ChurchName');
            $table->integer('ClientTypeId');
			$table->string('UniqueChurchId');
            $table->string('Address');
			$table->string('Town')->nullable();
            $table->integer('CountyId');
			$table->string('Website')->nullable();
			$table->string('EmailAddress')->nullable();
			$table->string('Phone')->nullable();
			$table->string('ImageUrl')->nullable();
			$table->text('Blurb');
			$table->string('Slug');
			$table->string('Password')->nullable();
			$table->longText('Notice');
			$table->integer('Featured')->nullable();
			$table->string('UniqueIdentifier');
			$table->tinyInteger('RepeatRecordings')->nullable();
			$table->integer('Switch');
			$table->boolean('mDelete')->default('0');
            $table->boolean('ShowOnWebsite')->default('1');
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
        Schema::dropIfExists('tblchurches');
    }
}
