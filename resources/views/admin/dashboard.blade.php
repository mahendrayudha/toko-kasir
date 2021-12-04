@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>
@endsection

@section('content')
    <!-- Small boxes (Stat box) -->
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Administrator</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Selamat Datang di Halaman Administrator</h3>
                            <!-- /.chart-responsive -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row (main row) -->
@endsection
