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
                <form action="/landing_page/update" method="post" class="form-setting" data-toggle="validator"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="alert alert-info alert-dismissible" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">&times;</button>
                            <i class="icon fa fa-check"></i> Perubahan berhasil disimpan
                        </div>
                        <div class="form-group row">
                            <label for="hero_title" class="col-lg-2 control-label">Hero Title</label>
                            <div class="col-lg-6">
                                <input type="text" name="hero_title" class="form-control" id="hero_title" required
                                    autofocus value="{{ $data->hero_title }}">
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hero_subtitle" class="col-lg-2 control-label">Hero Subtitle</label>
                            <div class="col-lg-6">
                                <textarea name="hero_subtitle" class="form-control" id="hero_subtitle" rows="3"
                                    required>{{ $data->hero_subtitle }}</textarea>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="download_title" class="col-lg-2 control-label">Download Title</label>
                            <div class="col-lg-6">
                                <input type="text" name="download_title" class="form-control" id="download_title" required
                                    autofocus value="{{ $data->download_title }}">
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="download_subtitle" class="col-lg-2 control-label">Download Subtitle</label>
                            <div class="col-lg-6">
                                <textarea name="download_subtitle" class="form-control" id="download_subtitle" rows="3"
                                    required>{{ $data->download_subtitle }}</textarea>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="footer_desc" class="col-lg-2 control-label">Footer Description</label>
                            <div class="col-lg-6">
                                <textarea name="footer_desc" class="form-control" id="footer_desc" rows="3"
                                    required>{{ $data->footer_desc }}</textarea>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="url_googleplay" class="col-lg-2 control-label">Url Google Play</label>
                            <div class="col-lg-6">
                                <textarea name="url_googleplay" class="form-control" id="url_googleplay" rows="3"
                                    required>{{ $data->url_googleplay }}</textarea>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="url_appstore" class="col-lg-2 control-label">Url App Store</label>
                            <div class="col-lg-6">
                                <textarea name="url_appstore" class="form-control" id="url_appstore" rows="3"
                                    required>{{ $data->url_appstore }}</textarea>
                                <span class="help-block with-errors"></span>
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
