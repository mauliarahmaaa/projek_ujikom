<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Petugas extends Authenticatable
{
    use Notifiable;
    protected $guard = 'petugas';
    protected $fillable = ['nama_petugas', 'username', 'password', 'telp', 'level'];
    protected $primaryKey='id_petugas';
}
