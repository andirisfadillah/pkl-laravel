<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index () {
        $siswa=Siswa::get();
        return view('siswa.index', compact('siswa'));
    }
    public function create() {
        return view('siswa.tambah');
    }
    public function store(Request $request) {
        Siswa::create([
        'nis'=> $request->nis,
        'nama'=> $request->nama,
        'jurusan'=> $request->jurusan,
        'hobi'=> $request->hobi,
        ]);
        return back();
    }
    public function edit($id) {
        $siswa= Siswa::find($id);
        return view('siswa.edit',compact('siswa'));
    }
    public function update( Request $request, $id){
        $siswa= Siswa::find($id);
       $siswa->update( [
        'nis'=> $request->nis,
        'nama'=> $request->nama,
        'jurusan'=> $request->jurusan,
        'hobi'=> $request->hobi,
        ]);
        return redirect('siswa');
    }
    public function destroy($id){
        $siswa= Siswa::find($id);
        $siswa->delete();

        return back();
    }
}


