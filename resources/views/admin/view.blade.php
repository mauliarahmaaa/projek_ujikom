@extends('template.main')

@section('title')

@section('content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Daftar Petugas</h3>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Petugas</th>
                                        <th>Username</th>
                                        <th>Telp</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($admin as $item)
                                    <tr>
                                        <td>{{$item->nama_petugas}}</td>
                                        <td>{{{$item->username}}}</td>
                                        <td>{{$item->telp}}</td>
                                        <td>{{$item->level}}</td>
                                        <td>
                                        <a href="/edit/{{$item->id_petugas}}" class="btn btn-success btn-sm">Edit </a>
                                        <a href="/hapus/{{$item->id_petugas}}" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-sm">Hapus </a>
                                        
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection