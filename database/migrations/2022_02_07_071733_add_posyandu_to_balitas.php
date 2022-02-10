<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPosyanduToBalitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('balitas', function (Blueprint $table) {
            $table->bigInteger('nik');
            $table->string('posyandu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('balitas', function (Blueprint $table) {
            $table->dropColumn('nik');
            $table->dropColumn('posyandu');
        });
    }
}
