<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Petugas;
use App\Masyarakat;

class AdminController extends Controller
{
    public function profil(){
        return view('admin.profil');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function daftar_petugas(){
        $admin = Petugas::all();
        return view('admin.view', ['admin' => $admin]);
    }

    public function tambah_petugas(){
        $level = ['admin' , 'petugas'];
        return view('admin.tambahpetugas' , ['level' => $level]);
    }

    public function input(Request $request){
        $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required|unique:petugas',
            'password' => 'required',
            'telp' => 'required',
            'level' => 'required'
        ]);

        Petugas::create([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => $request->level
        ]);   

        return redirect('/daftar_petugas');
    }

    public function hapus($id){
        $petugas = Petugas::find($id);
        $petugas->delete();
        return redirect('/daftar_petugas');
    }

    public function edit($id){
        $edit = Petugas::find($id);
        return view('admin.edit', ['edit' => $edit]);
    }

    public function edit_petugas(Request $request, $id){
        $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required',
            'level' => 'required'
        ]);

        Petugas::where('id_petugas', $id)
        ->update([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' => $request->password,
            'telp' => $request->telp,
            'level' => $request->level
        ]);   
        return redirect('/daftar_petugas');
    }

    public function dashboard_petugas()
    {
        return view('petugas.dashboard');
    }

    public function daftar_masyarakat()
    {
        $user = Masyarakat::all();
        return view('admin.daftarmasyarakat', compact('user'));
    }

    public function daftarmasyarakat()
    {
        $user = Masyarakat::all();
        return view('petugas.daftarmasyarakat', compact('user'));
    }

}
