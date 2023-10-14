<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusers', function (Blueprint $table) {
            $table->bigIncrements('UserId');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('email')->unique();
			$table->string('password');
            $table->boolean('mDelete')->nullable();
            $table->boolean('isActive')->nullable();
			$table->integer('RoleId')->nullable();
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
        Schema::dropIfExists('tblusers');
    }
}
