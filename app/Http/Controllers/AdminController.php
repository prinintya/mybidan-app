<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{ 
    public function index(){
        return view('admin.dashboard');
    }

    public function rekam_medik(){
        return view('admin.rekam_medik');
    }

    public function keuangan(){
        return view('admin.keuangan');
    }

    public function data_pasien(){
        $pasien = DB::table('pasien')->paginate(10);
        return view('admin.data_pasien', ['pasien' => $pasien]);
    }
  
    public function data_kehamilan(){
        $kehamilan = DB::table('kehamilans')->paginate(10);
        return view('admin.data_kehamilan', ['kehamilan' => $kehamilan]);
    }
    public function data_persalinan(){
        $persalinan = DB::table('persalinans')->paginate(10);
        return view('admin.data_persalinan', ['persalinan' => $persalinan]);
    }
    public function data_nifas(){
        $nifas = DB::table('nifas')->paginate(10);
        return view('admin.data_nifas', ['nifas' => $nifas]);
    }
    public function data_kb(){
        $kb = DB::table('kbs')->paginate(10);
        return view('admin.data_kb', ['kb' => $kb]);
    }
    
    
}
