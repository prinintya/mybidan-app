<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NifasController extends Controller
{
    //
    public function tambah_nifas(){
        return view('admin.tambah_nifas');
    }
    public function store_nifas(Request $request){
        
        $request->validate([
            'tglPemeriksaan' => 'required',
            'keluhan' => 'nullable|string',
            'riwayatPasien' => 'required|string',
            'hasilPemeriksaan' => 'required|string',
            'analisaPasien' => 'required|string',
            'penatalaksanaanAsuhan' => 'required|string',
            ]);
            
        $save = DB::table('nifas')->insert([
            'tglPemeriksaan' => $request ->tglPemeriksaan,
            'keluhan' => $request ->keluhan,
            'riwayatPasien' => $request ->riwayatPasien,
            'hasilPemeriksaan' => $request->hasilPemeriksaan,
            'analisaPasien' => $request->analisaPasien,
            'penatalaksanaanAsuhan' => $request->penatalaksanaanAsuhan,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]);
            
            if($save){
                return redirect('/data_nifas')->with('sukses', 'Data berhasil ditambahkan');
            }
    }

}
