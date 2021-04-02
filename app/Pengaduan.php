<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $primaryKey = 'id_pengaduan';
    protected $table = "pengaduans";
    protected $fillable = ['tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status'];

    public function masyarakat()
    {
        return $this->belongsTo('App\Masyarakat', 'nik', 'nik');
    }
}
