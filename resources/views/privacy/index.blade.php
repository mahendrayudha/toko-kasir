@extends('layouts.master')

@section('title')
    Privacy Policy
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Privacy Policy</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <form action="/privacy/update" method="post" class="form-setting" data-toggle="validator">
                    @csrf
                    <div class="box-body">
                        {{-- <div class="alert alert-info alert-dismissible" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">&times;</button>
                            <i class="icon fa fa-check"></i> Perubahan berhasil disimpan
                        </div> --}}
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                {{ $message }}
                            </div>
                        @endif
                        <div class="form-group row">
                            <label for="path_logo" class="col-lg-2 control-label">Privacy</label>
                            <div class="col-lg-12">
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"
                                    required>{{ $privacy->deskripsi }}</textarea>
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
