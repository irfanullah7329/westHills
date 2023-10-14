<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblchurchAnnouncementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblchurch_announcement', function (Blueprint $table) {
            $table->bigIncrements('ChurchAnnouncementId');
            $table->string('AnnouncementTitle',15);
            $table->longText('Announcement')->nullable();
            $table->bigInteger('ChurchId');
            $table->boolean('mDelete')->default(0);
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
        Schema::dropIfExists('tblchurch_announcement');
    }
}
