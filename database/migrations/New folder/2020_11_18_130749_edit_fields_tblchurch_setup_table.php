<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditFieldsTblchurchSetupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblchurch_setup', function (Blueprint $table) {
            $table->boolean('Aerials')->default('0')->change();
            $table->boolean('Switch')->default('0')->change();
            $table->boolean('HomePlugs')->default('0')->change();
            $table->boolean('DirectWire')->default('0')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblchurch_setup', function (Blueprint $table) {
            $table->boolean('Aerials')->default('1')->change();
            $table->boolean('Switch')->default('1')->change();
            $table->boolean('HomePlugs')->default('1')->change();
            $table->boolean('DirectWire')->default('1')->change();
        });
    }
}
