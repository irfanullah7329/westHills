<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblchurchNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblchurch_notices', function (Blueprint $table) {
            $table->bigIncrements('ChurchNoticeId');
            $table->string('NoticeTitle');
            $table->longText('Notice')->nullable();
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
        Schema::dropIfExists('tblchurch_notices');
    }
}
