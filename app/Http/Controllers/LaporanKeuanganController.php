<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\UrlTrait;
use App\Models\Transaksi;


class LaporanKeuanganController extends Controller
{
    use UrlTrait;

    // ============== users login / register / reset password / management ==================================================
   
    public function index() 
    {
        $userid = session()->get('userid');
        $user = DB::select('select * from tbl_user where id = :userid', [
            'userid' => $userid,
        ]);

        if($user[0]->is_admin == 1)
        {
            $kaskeluar =  Transaksi::select('tbl_lap_keuangan.nama_lap_keuangan','tbl_lap_keuangan.tgl_pembuatan_laporan','tu.fullname','tbl_lap_keuangan.id')
            ->join('tbl_user as tu','tu.id','tbl_lap_keuangan.user_id')
            ->groupBy('tbl_lap_keuangan.id')
            ->get();

            return view('pages.laporan-keuangan.index', compact('kaskeluar'));
            
            // array_push($data,  $lapkeu);

        }
        else{
        
        
        
        // $categories  = Category::latest()->paginate(5);
        //$categories = DB::table('categories')->latest()->paginate(5);        

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

            return view('pages.laporan-keuangan.index', compact('lap_keu', 'kasmasuk', 'kaskeluar'));
        }
    }
    
    public function show($id) 
    {
        $lap_keu = DB::select('select * from tbl_lap_keuangan where id = :transaksi_id', [
            'transaksi_id' => $id,
        ]);

        $kas_masuk = DB::select('select * from tbl_kas where id_transaksi = :transaksi_id and status_kas = 1', [
            'transaksi_id' => $id,
        ]);

        $sum_kas_masuk = DB::select('select SUM(nominal) as jumlah from tbl_kas where id_transaksi = :transaksi_id and status_kas = 1', [
            'transaksi_id' => $id,
        ]);
        
        $kas_keluar = DB::select('select * from tbl_kas where id_transaksi = :transaksi_id and status_kas = 0', [
            'transaksi_id' => $id,
        ]);

        $sum_kas_keluar = DB::select('select SUM(nominal) as jumlah from tbl_kas where id_transaksi = :transaksi_id and status_kas = 0', [
            'transaksi_id' => $id,
        ]);

        return view('pages.laporan-keuangan.detail', compact('lap_keu', 'kas_masuk', 'sum_kas_masuk', 'kas_keluar', 'sum_kas_keluar'));
    }
    
    public function store(Request $request) 
    {
          
        $userid = session()->get('userid');
        $nama_laporan = $request->nama_laporan;
        $tanggal_lapor = $request->tanggal_lapor;
    
        $data=array('user_id'=>$userid,"nama_lap_keuangan"=>$nama_laporan,"tgl_pembuatan_laporan"=>$tanggal_lapor);
        DB::table('tbl_lap_keuangan')->insert($data);
        $lastId = DB::getPdo()->lastInsertId();
       
        return redirect()->route('laporan-keuangan.details', $lastId)
            ->with('success', 'Laporan Keuangan Berhasil di tambahkan');
            
    }

    public function kas($lemparan, $id_transaksi) 
    {
        $userid = session()->get('userid');
        $lap_keu = DB::select('select * from tbl_lap_keuangan where user_id = :userid', [
            'userid' => $userid,
        ]);
        return view('pages.kas-masuk.create', compact('lemparan','lap_keu','id_transaksi'));
    }

    public function create_kas(Request $request) 
    {
        
        for($i=0; $i<count($request->nama_akun); $i++){    
            $id_transaksi = $request->id_transaksi;
            $status_kas = $request->status_kas;
            $nama_akun = $request->nama_akun[$i];
            $nominal = $request->nominal[$i];
            $data=array('id_transaksi'=>$id_transaksi,"status_kas"=>$status_kas,"nama_akun"=>$nama_akun,"nominal"=>$nominal);
            DB::table('tbl_kas')->insert($data);
        }
        if($status_kas == 1){
            $status_kas = "Kas Masuk";
        }
        else{
            $status_kas = "Kas Keluar";
        }

        return redirect()->route('laporan-keuangan.details', $request->id_transaksi)
            ->with('success', 'Data '.$status_kas.' Berhasil di tambahkan');
            
    }

    public function create() 
    {
        $userid = session()->get('userid');
        $lap_keu = DB::select('select * from tbl_lap_keuangan where user_id = :userid', [
            'userid' => $userid,
        ]);
        return view('pages.laporan-keuangan.create', compact('lap_keu'));
    }


}