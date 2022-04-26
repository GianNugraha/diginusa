<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Transaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_lap_keuangan')->insert([
            'nama_lap_keuangan' => "Testing Diginusa",
            'user_id' => 2,
            'tgl_pembuatan_laporan' => '2024-04-25'
            ]);
    }
}
