<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'auth:petugas'], function () {

//ADMIN
Route::group(['middleware' => 'checkLevel:admin'], function () {
Route::get('/profil', 'AdminController@profil');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/daftar_petugas', 'AdminController@daftar_petugas');
Route::get('/tambah_petugas', 'AdminController@tambah_petugas');
Route::post('/add_petugas', 'AdminController@input');
Route::get('/hapus/{id}', 'AdminController@hapus');
Route::get('/edit/{id}', 'AdminController@edit');
Route::patch('/edit_petugas/{id}', 'AdminController@edit_petugas');
Route::get('/admin/daftar_masyarakat', 'AdminController@daftar_masyarakat');
});

//PETUGAS
Route::get('/petugas', 'AdminController@dashboard_petugas');
Route::get('/petugas/daftarmasyarakat', 'AdminController@daftarmasyarakat');
});
//LOGIN
Route::get('/login', 'MasyarakatController@view_login')->name('login');
Route::post('/signup', 'MasyarakatController@register');
Route::post('/login', 'AuthController@login_handler');

//LOGOUT
Route::group(['middleware' => 'auth:petugas,warga'], function() {
Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware' => 'auth:warga'], function () {
//MASYARAKAT
Route::get('/', 'MasyarakatController@view_user');
Route::get('/form_pengaduan', 'MasyarakatController@form_pengaduan');
Route::post('/aduan-store', 'MasyarakatController@proses_aduan');
Route::get('/cek_status/{nik}', 'MasyarakatController@cek_status');
});

Route::get('home', function () {
    return view('template.main');
});
