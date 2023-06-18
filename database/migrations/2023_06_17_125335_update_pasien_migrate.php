<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePasienMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('pasien', function (Blueprint $table) {
        $table->id();
        $table->integer('nik');
        $table->string('status');
        $table->string('nama');
        $table->string('penyakit');
        $table->string('telepon');
        $table->text('alamat');
        $table->text('tempat_lahir');
        $table->date('tanggal_lahir');
        $table->date('tanggal_pemeriksaan');
        $table->string('layanan');
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
        //
    }
}
