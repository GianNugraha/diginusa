<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class Kas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $kas = [
            [ 'id_transaksi' => 1, 'nama_akun' => 'penjualan aset', 'status_kas' => 1, 'nominal' => 3000000],
            [ 'id_transaksi' => 1, 'nama_akun' => 'pendapatan piutang', 'status_kas' => 1, 'nominal' => 13000000],
            [ 'id_transaksi' => 1, 'nama_akun' => 'pembayaran gaji karyawan', 'status_kas' => 0, 'nominal' => 8500000]
        ];
        DB::table('tbl_kas')->insert($kas);
    }
}
