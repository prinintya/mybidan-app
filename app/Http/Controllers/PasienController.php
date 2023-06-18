<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//redirect
use Illuminate\Http\RedirectResponse;
//database
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PasienController extends Controller
{
    public function tambah_pasien(){
        return view('admin.tambah_pasien');
    }
    
    public function store_pasien(Request $request){
        
        $request->validate([
            'nik' => 'required',
            'status' => 'nullable|string',
            'nama' => 'required|string',
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'required',
            'tanggal_pemeriksaan' => 'required',
            'penyakit' => 'nullable|string',
            'telepon' => 'required|max:15',
            'alamat' => 'required',
            'layanan' => 'required',
            ]);
            
        $save = DB::table('pasien')->insert([
            'nik' => $request ->nik,
            'status' => $request ->status,
            'nama' => $request->nama,
            'tempat_lahir' => $request ->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tanggal_pemeriksaan' => $request->tanggal_pemeriksaan,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'penyakit' => $request->penyakit,
            'layanan' => $request->layanan,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]);
            
            if($save){
                return redirect('/data_pasien')->with('sukses', 'Data berhasil ditambahkan');
            }
    }
    
    public function hapus_pasien(Request $request){
        $id = $request->id;
        DB::table('pasien')->delete($id);
        return redirect('/data_pasien')->with('hapus', 'Data pasien berhasil dihapus');
    }
    
    public function edit_pasien($id){
        $data = DB::table('pasien')->find($id);
        return view('admin.edit_pasien', ['data' => $data]);
    }
    
    public function update_pasien(Request $request){
        
        $request->validate([
            'nama' => 'required|string',
            'penyakit' => 'nullable|string',
            'telepon' => 'required',
            'tanggal_pemeriksaan' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required'
            ]);
        
        $pasien = DB::table('pasien')->find($request->id);
        
        DB::table('pasien')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'penyakit' => $request->penyakit,
            'tanggal_pemeriksaan' => $request->tanggal_pemeriksaan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'updated_at' => date('Y-m-d H:i:s')
            ]);
        
        return redirect('/data_pasien')->with('update', 'Data pasien berhasil diupdate');
    }
    
    public function cari_pasien(Request $request){
        $pasien = DB::table('pasien')->where('nama', 'like', "%$request->keyword%")->get();
        return view('admin.cari_pasien', ['pasien' => $pasien, 'keyword' => $request->keyword]);
    }
}
