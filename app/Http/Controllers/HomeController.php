<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    // ============== users login / register / reset password / management ==================================================
    public function index() 
    {
        $userid = session()->get('userid');
        $lap_keu = DB::select('select * from tbl_lap_keuangan where user_id = :userid', [
            'userid' => $userid,
        ]);
        // Empty array
        $kasmasuk = $this->sum_masuk = [ 0 => 'Others' ];
        $kaskeluar = $this->sum_keluar = [ 0 => 'Others' ];

        for($i=0; $i< count($lap_keu); $i++){
            $sum_kas_masuk = DB::select('select SUM(nominal) as jumlah from tbl_kas where id_transaksi = :transaksi_id and status_kas = 1', [
                'transaksi_id' => $lap_keu[$i]->id,
            ]);
            $kasmasuk[$i] = $sum_kas_masuk;
            
        }

        for($iteration=0; $iteration< count($lap_keu); $iteration++){
            $sum_kas_keluar = DB::select('select SUM(nominal) as jumlah from tbl_kas where id_transaksi = :transaksi_id and status_kas = 0', [
                'transaksi_id' => $lap_keu[$iteration]->id,
            ]);
            $kaskeluar[$iteration] = $sum_kas_keluar;
            
        }

        return view('pages.dashboard.index', compact('lap_keu', 'kasmasuk', 'kaskeluar'));
    }


}