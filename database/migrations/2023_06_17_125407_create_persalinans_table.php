<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersalinansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persalinans', function (Blueprint $table) {
            $table->id();
            $table->date('tglPemeriksaan');
            $table->string('keluhan');
            $table->string('riwayatPasien');
            $table->string('hasilPemeriksaan');
            $table->string('analisaPasien');
            $table->string('penatalaksanaanAsuhan');
            $table->string('laporanPersalinan');
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
        Schema::dropIfExists('persalinans');
    }
}
