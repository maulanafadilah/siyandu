<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->bigInteger('no_kk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('usia');
            $table->string('ibu');
            $table->string('ayah');
            $table->string('wali')->nullable();
            $table->longText('alamat');
            $table->integer('tinggi_lahir');
            $table->double('berat_lahir', 8, 2);
            $table->longText('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balitas');
    }
}
