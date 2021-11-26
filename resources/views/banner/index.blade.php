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
                <form action="/banner/update" method="post" class="form-setting" data-toggle="validator"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="alert alert-info alert-dismissible" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">&times;</button>
                            <i class="icon fa fa-check"></i> Perubahan berhasil disimpan
                        </div>
                        <div class="form-group row">
                            <label for="path_logo" class="col-lg-2 control-label">Logo</label>
                            <div class="col-lg-4">
                                <input type="file" name="path_logo" class="form-control" id="path_logo"
                                    onchange="preview('.tampil-logo', this.files[0])">
                                <span class="help-block with-errors"></span>
                                <br>
                                <div class="tampil-logo"></div>
                                <img src="{{ url('/') . $data->logo }} " alt="" width="300">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hero_app_image" class="col-lg-2 control-label">Hero App Image</label>
                            <div class="col-lg-4">
                                <input type="file" name="hero_app_image" class="form-control" id="hero_app_image"
                                    onchange="preview('.tampil-hero', this.files[0])">
                                <span class="help-block with-errors"></span>
                                <br>
                                <div class="tampil-hero"></div>
                                <img src="{{ url('/') . $data->hero_app_image }} " alt="" width="300">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="download_hero_app_image" class="col-lg-2 control-label">Download Hero App
                                Image</label>
                            <div class="col-lg-4">
                                <input type="file" name="download_hero_app_image" class="form-control"
                                    id="download_hero_app_image" onchange="preview('.tampil-download', this.files[0])">
                                <span class="help-block with-errors"></span>
                                <br>
                                <div class="tampil-download"></div>
                                <img src="{{ url('/') . $data->download_app_image }} " alt="" width="300">
                            </div>
                        </div>

                    </div>
                    <div class="box-footer text-right">
                        <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan
                            Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
