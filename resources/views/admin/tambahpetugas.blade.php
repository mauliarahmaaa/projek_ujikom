@extends('template.main')

@section('title')

@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tambah Petugas</h4>
    </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="/add_petugas" method="post">
                {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama Petugas</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="first-name" class="form-control" name="nama_petugas" placeholder="Masukkan Nama Petugas" autocomplete="off">
                                @if($errors->has('nama_petugas'))
                            <div class="text-danger">
                                {{ $errors->first('nama_petugas')}}
                            </div>
                            @endif
                            </div>
                            <div class="col-md-4">
                                <label>Username</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="username" class="form-control" name="username" placeholder="Masukkan Username" autocomplete="off">
                                @if($errors->has('username'))
                            <div class="text-danger">
                                {{ $errors->first('username')}}
                            </div>
                            @endif
                            </div>
                            <div class="col-md-4">
                                <label>Password</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="password" id="contact-info" class="form-control" name="password" placeholder="Masukkan Password">
                                @if($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password')}}
                            </div>
                            @endif
                            </div>
                            <div class="col-md-4">
                                <label>Telp</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="telp" class="form-control" name="telp" placeholder="Masukkan Telp">
                                @if($errors->has('telp'))
                            <div class="text-danger">
                                {{ $errors->first('telp')}}
                            </div>
                            @endif
                            </div>  
                            <div class="col-md-4 form-group">
                                <label>Level</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <fieldset class="form-group">
                                    <select class="form-select" id="basicSelect" name="level">
                                        <option>Pilih Level</option>
                                        @foreach($level as $level)
                                        <option value="{{$level}}">{{$level}}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>  
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                    </div>
                </div>
        </form>
    </div>
</div>

@endsection