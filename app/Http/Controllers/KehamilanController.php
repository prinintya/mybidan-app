<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KehamilanController extends Controller
{
    //
    public function tambah_kehamilan(){
        return view('admin.tambah_kehamilan');
    }
    public function store_kehamilan(Request $request){
        
        $request->validate([
            'tglPemeriksaan' => 'required',
            'keluhan' => 'nullable|string',
            'riwayatPasien' => 'required|string',
            'hasilPemeriksaan' => 'required|string',
            'analisaPasien' => 'required',
            'penatalaksanaanAsuhan' => 'required',
            ]);
            
        $save = DB::table('kehamilans')->insert([
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
                return redirect('/data_kehamilan')->with('sukses', 'Data berhasil ditambahkan');
            }
    }
 
}
