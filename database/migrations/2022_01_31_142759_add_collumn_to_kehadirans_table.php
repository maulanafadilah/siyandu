<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCollumnToKehadiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kehadirans', function (Blueprint $table) {
            $table->string('no_kk');
            $table->date('tanggal');
            $table->string('nama_lengkap');
            $table->integer('usia');
            $table->integer('tinggi');
            $table->double('berat', 8, 2);
            $table->integer('keterangan')->nullable();
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
            $table->dropColumn('no_kk');
            $table->dropColumn('tanggal');
            $table->dropColumn('nama_lengkap');
            $table->dropColumn('usia');
            $table->dropColumn('tinggi');
            $table->dropColumn('berat', 8, 2);
            $table->dropColumn('keterangan');
        });
    }
}
