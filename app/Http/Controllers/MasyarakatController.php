<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Masyarakat;
use App\Pengaduan;

class MasyarakatController extends Controller
{
    // Login
    public function view_login()
    {
        return view('template.login');
    }

    public function register(Request $request)
    {
        //return $request;
        // $this->validate($request, [
        //     'nik' => 'required|numeric|unique:masyarakats',
        //     'nama' => 'required|min:3',
        //     'username' => 'required|unique:masyarakats',
        //     'password' => 'required|min:6',
        //     'telp' => 'required|numeric|unique:masyarakats'
        // ]);
      
        Masyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp
        ]);
        
        return back()->with('status', 'Daftar Anda Berhasil');
    }

    //view_masyarakat
    public function view_user()
    {
        return view('template.user');
    }

    public function form_pengaduan()
    {
        return view('masyarakat.form_pengaduan');
    }

    public function proses_aduan(Request $request)
    {
        $this->validate($request, [
            'isi' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // $imgName = $request->file->getClientOriginalName('image') . '-' . time() . '-' . $request->file->extension();
        // $file->move(public_path('image'), $imgName);

        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'image';
        $file->move(public_path('image').$nama_file);

        Pengaduan::create([
            'tgl_pengaduan' => date("Y-m-d"),
            'nik' => $request->nik,
            'isi_laporan' => $request->isi,
            'foto' => $nama_file,
            'status' => '0'
        ]);
        return back()->with('status', 'Daftar Anda Berhasil');
    }

    public function cek_status($nik)
    {
        $cek_status = Pengaduan::where('nik', $nik)->get();

        return view('masyarakat.cek_status', ['status'=>$cek_status]);
    }
}
