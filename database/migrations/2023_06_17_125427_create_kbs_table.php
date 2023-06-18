<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kbs', function (Blueprint $table) {
            $table->id();
            $table->date('tglPemeriksaan');
            $table->string('tujuanKunjungan');
            $table->string('metodeKb');
            $table->string('skriningKesehatan');
            $table->string('analisaPasien');
            $table->string('penatalaksanaanAsuhan');
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
        Schema::dropIfExists('kbs');
    }
}
