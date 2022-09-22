<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function browse (){
        $pegawai = Pegawai::all();
        $data['pegawais'] = $pegawai;
        return view('index', $data);
    }
    public function store (Request $request){
       

        $pegawai = new Pegawai;
        $pegawai->id = $request->id;
        $pegawai->nik = $request->nik;
        $pegawai->name = $request->name;
       
        $pegawai->email = $request->email;
        $pegawai->address = $request->address;
        
     
        $saved = $pegawai->save();
        
        return redirect()->back()->with('notify-berhasil', 'Pegawai berhasil ditambahkan');
    }
}
