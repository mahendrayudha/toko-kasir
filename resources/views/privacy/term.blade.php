@extends('layouts.master')

@section('title')
    Term Use
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Term Use</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <form action="/term/updateterm" method="post" class="form-setting" data-toggle="validator">
                    @csrf
                    <div class="box-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                {{ $message }}
                            </div>
                        @endif
                        {{-- <div class="alert alert-info alert-dismissible" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">&times;</button>
                            <i class="icon fa fa-check"></i> Perubahan berhasil disimpan
                        </div> --}}
                        <div class="form-group row">
                            <label for="path_logo" class="col-lg-2 control-label">Term Use</label>
                            <div class="col-lg-12">
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"
                                    required>{{ $term->deskripsi }}</textarea>
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
