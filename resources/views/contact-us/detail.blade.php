@extends('layouts.master')

@section('title')
    Pengaturan
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Pengaturan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <form action="" method="post" class="form-setting" data-toggle="validator" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="nama_perusahaan" class="col-lg-2 control-label">Nama</label>
                            <div class="col-lg-6">
                                <p>{{ $contact_us->name }}</p>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telepon" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                                <p>{{ $contact_us->email }}</p>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-lg-2 control-label">Subject</label>
                            <div class="col-lg-6">
                                <p>{{ $contact_us->subject }}</p>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-lg-2 control-label">Deskripsi</label>
                            <div class="col-lg-6">
                                <p>{{ $contact_us->deskripsi }}</p>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
