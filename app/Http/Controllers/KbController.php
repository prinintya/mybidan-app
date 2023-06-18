<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KbController extends Controller
{
    //
    public function tambah_kb(){
        return view('admin.tambah_kb');
    }
    public function store_kb(Request $request){
        
        $request->validate([
            'tglPemeriksaan' => 'required',
            'tujuanKunjungan' => 'required|string',
            'metodeKb' => 'required|string',
            'skriningKesehatan' => 'required|string',
            'analisaPasien' => 'required|string',
            'penatalaksanaanAsuhan' => 'required|string',
            ]);
            
        $save = DB::table('kbs')->insert([
            'tglPemeriksaan' => $request ->tglPemeriksaan,
            'tujuanKunjungan' => $request ->tujuanKunjungan,
            'metodeKb' => $request ->metodeKb,
            'skriningKesehatan' => $request->skriningKesehatan,
            'analisaPasien' => $request->analisaPasien,
            'penatalaksanaanAsuhan' => $request->penatalaksanaanAsuhan,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]);
            
            if($save){
                return redirect('/data_kb')->with('sukses', 'Data berhasil ditambahkan');
            }
    }
}
