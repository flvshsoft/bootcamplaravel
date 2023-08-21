<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::get();
        return view('layout.index', ['siswa' => $siswa]);
    }

    public function add ()
    {
        return view('layout.add');
    }

    public function store(Request $request)
    {
        Siswa::insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jk
        ]);
        return redirect('/siswa')->with('success', 'Data added successfully');
    }

    public function destroy($id)
    {
        // echo 'ok';
        Siswa::where('id', $id)->delete();
        return redirect('/siswa')->with('success', 'Data berhasil di hapus');
    }
}
