<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPosyanduToKehadirans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kehadirans', function (Blueprint $table) {
            $table->string('posyandu');
            $table->string('ntob')->nullable();
            $table->string('imunisasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kehadirans', function (Blueprint $table) {
            $table->dropColumn('posyandu');
            $table->dropColumn('ntob');
            $table->dropColumn('imunisasi');
        });
    }
}
