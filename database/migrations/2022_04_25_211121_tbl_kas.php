<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kas', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('id_transaksi');
            $table->string('nama_akun');
            $table->boolean('status_kas');
            $table->double('nominal',8,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kas');
    }
}
