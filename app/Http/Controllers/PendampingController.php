<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendampingController extends Controller
{
    public function index(){
        $pendamping = DB::table('pendamping')->paginate(5);
        $laki = DB::table('pendamping')->where('gender','Laki - Laki')->get();
        $wanita = DB::table('pendamping')->where('gender','Perempuan')->get();

        return view('pendamping', ['pendamping' => $pendamping]);
    }

    public function add(){
        return view('tambah_pendamping');
    }

    public function store(Request $request){
        DB::table('pendamping')->insert([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'agama' => $request->agama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pendidikan' => $request->pendidikan,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'foto' => 'null'
        ]);
        return view('tambah_pendamping');
    }

    public function update($id){
        $pendamping = DB::table('pendamping')->where('id', $id)->get();
        return view('pendamping_update', ['pendamping' => $pendamping]);
    }
}
