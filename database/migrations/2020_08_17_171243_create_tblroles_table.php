<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblroles', function (Blueprint $table) {
            $table->bigIncrements('RoleId');
            $table->string('RoleName');
            $table->string('RoleDescription')->nullable();
            $table->boolean('mDelete')->default(0);
            $table->boolean('isActive')->default(1);
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
        Schema::dropIfExists('tblroles');
    }
}
