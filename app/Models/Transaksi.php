<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Transaksi extends Authenticatable
{
    protected $table = 'tbl_lap_keuangan';   

    public function SumNominal($id, $status)
    {
        $nominal =  $this->join('tbl_kas as tk','tbl_lap_keuangan.id','tk.id_transaksi')
                    ->where('status_kas',$status)
                    ->where('tk.id_transaksi', $id)
                    ->sum('tk.nominal');
        return $nominal;
    }
}
