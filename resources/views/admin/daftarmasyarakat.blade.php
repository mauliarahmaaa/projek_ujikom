@extends('template.main')

@section('title')

@section('content')

<h3>Daftar Masyarakat</h3>

<div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Telp</th>
                                        <th>Status<th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $masyarakat)
                                    <tr>
                                        <td>{{$masyarakat -> nik}}</td>
                                        <td>{{$masyarakat -> nama}}</td>
                                        <td>{{$masyarakat -> username}}</td>
                                        <td>{{$masyarakat -> telp}}</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

@endsection