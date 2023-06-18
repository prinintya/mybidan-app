<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PersalinanController extends Controller
{
    //
    public function tambah_persalinan(){
        return view('admin.tambah_persalinan');
    }
    public function store_persalinan(Request $request){
        
        $request->validate([
            'tglPemeriksaan' => 'required',
            'keluhan' => 'nullable|string',
            'riwayatPasien' => 'required|string',
            'hasilPemeriksaan' => 'required|string',
            'analisaPasien' => 'required|string',
            'penatalaksanaanAsuhan' => 'required|string',
            'laporanPersalinan' => 'required|string',
            ]);
            
        $save = DB::table('persalinans')->insert([
            'tglPemeriksaan' => $request ->tglPemeriksaan,
            'keluhan' => $request ->keluhan,
            'riwayatPasien' => $request ->riwayatPasien,
            'hasilPemeriksaan' => $request->hasilPemeriksaan,
            'analisaPasien' => $request->analisaPasien,
            'penatalaksanaanAsuhan' => $request->penatalaksanaanAsuhan,
            'laporanPersalinan' => $request->laporanPersalinan,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]);
            
            if($save){
                return redirect('/data_persalinan')->with('sukses', 'Data berhasil ditambahkan');
            }
    }
}
