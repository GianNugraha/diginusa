<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblLapKeuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lap_keuangan', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('nama_lap_keuangan');
            $table->integer('user_id');
            $table->date('tgl_pembuatan_laporan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_lap_keuangan');
    }
}
