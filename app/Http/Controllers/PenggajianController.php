<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;
use Form;
use Html;
use Input;
use Redirect;
use View;
use App\Penggajian; 
use App\Tunjangan_pegawai; 
use App\Tunjangan; 
use App\Pegawai; 
use App\Jabatan; 
use App\Golongan; 
use App\Kategori_lembur; 
use App\Lembur_pegawai; 
use DB; 
use DateTime; 
use Auth;


class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function __construct()
    {
        $this->middleware('Pegawai');
    }

    public function index()
    {
            $penggajian = Penggajian::all(); 
            $tunjangan_pegawai = Tunjangan_pegawai::all(); 
            $pegawai = Pegawai::all(); 
            return view('Penggajian.index', compact('penggajian', 'tunjangan_pegawai',  'pegawai')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $pegawai = Pegawai::all(); 
         $tunjangan_pegawai = Tunjangan_pegawai::all(); 
         return view('Penggajian.create', compact('tunjangan_pegawai', 'pegawai')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $gaji = $request->all(); 
 
         $tunjangan_pegawai = DB::table('tunjangan_pegawais') 
                             ->select('Kode_tunjangan_id', 'pegawai_id')                     
                             ->where('id', $gaji['tunjangan_pegawai_id']) 
                             ->first(); 
        
         $pegawai = DB::table('pegawais') 
                 ->select('Nip', 'jabatan_id', 'golongan_id') 
                 ->where('id', $tunjangan_pegawai->Kode_tunjangan_id) 
                 ->first(); 
       
  
         $lemburpegawai = DB::table('lembur_pegawais') 
                     ->select('Kode_lembur_id', 'pegawai_id', 'Jumlah_jam') 
                     ->where('id', $gaji['tunjangan_pegawai_id']) 
                     ->first(); 
      
 
         $kategori_lembur = DB::table('kategori_lemburs') 
                             ->select('Kode_lembur', 'jabatan_id', 'golongan_id', 'Besaran_uang') 
                             ->where('jabatan_id', $pegawai->jabatan_id) 
                             ->where('golongan_id', $pegawai->golongan_id) 
                             ->first(); 
  
  
         $jabatan = DB::table('jabatans') 
                     ->select('Besaran_uang') 
                     ->where('id', $pegawai->jabatan_id) 
                     ->first(); 
 
  
         $golongan = DB::table('golongans') 
                     ->select('Besaran_uang') 
                     ->where('id', $pegawai->golongan_id) 
                     ->first(); 
       
  
         $tunjangan = DB::table('tunjangans') 
                     ->select('Besaran_uang') 
                     ->where('id', $tunjangan_pegawai->Kode_tunjangan_id) 
                     ->first(); 
       
  
  
         $jamlembur = $lemburpegawai->Jumlah_jam; 
         $jumlahuang = $jamlembur * $kategori_lembur->Besaran_uang; 
         $gajipokok = $jabatan->Besaran_uang + $golongan->Besaran_uang + $tunjangan->Besaran_uang; 
         $gajitotal = $gajipokok + $jumlahuang;  
         $tgl_ambil =  new DateTime('now'); 
         $Status = updated_at; 
         $petugas = Auth::user()->permission; 
    
                              
         $tunjanganpegawai = Penggajian::create([ 
             'tunjangan_pegawai_id' => $request['tunjangan_pegawai_id'],  
             'Jumlah_jam_lembur' => $jamlembur, 
            'Jumlah_uang_lembur' => $jumlahuang, 
             'Gaji_pokok' => $gajipokok, 
             'Total_gaji' => $gajitotal, 
             'Tanggal_pengambilan' => $tgl_ambil, 
             'Status_pengambilan' => $Status , 
             'Petugas_penerima' => $petugas 
  
         ]); 
         dd($tunjanganpegawai); 
  
         return redirect('Penggajians'); 
     } 
  



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Penggajian::find($id);
        $tunjangan = Tunjangan_pegawai::all();
        return view('Penggajian.show',compact('data','tunjangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Penggajian::find($id);
        $tunjangan = Tunjangan_pegawai::all();
        return view('Penggajian.edit',compact('data','tunjangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataUpdate = Request::all();
        $data = Penggajian::find($id);
        $data->update($dataUpdate);
        return redirect('Penggajians');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penggajian::find($id)->delete();
        return redirect('Penggajians');
    }
}
