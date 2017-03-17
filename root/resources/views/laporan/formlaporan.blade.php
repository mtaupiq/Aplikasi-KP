@extends('layouts.new')

@section('title','Print Laporan')

@section('header')
<h1 class="page-title">Aplikasi Logbook Gangguan OSS</h1>
<p class="page-description">
    PT. Telkom Akses Tasikmalaya.
</p>
@endsection

@section('content')
<div class="col-md-8 col-lg-8 col-md-offset-2">
    <div class="panel panel-bordered panel-primary">
        <div class="panel-heading bg-light-blue-a400">
            <h3 class="panel-title">Print Laporan</h3>
            <div class="panel-actions hidden-xs">
                <a class="panel-action icon md-minus" data-toggle="panel-collapse" aria-expanded="true"
                aria-hidden="true"></a>
                <a class="panel-action icon md-fullscreen" data-toggle="panel-fullscreen" aria-hidden="true"></a>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3">
                    <form action="{{ url('laporan/print') }}" method="GET" class="form-horizontal" role="form" target="_blank">
                        <div class="form-group">
                            <label for="tgl">Tanggal:</label>
                            <div class="input-daterange" data-plugin="datepicker">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="icon md-calendar" aria-hidden="true"></i>
                                    </span>
                                    <input id="tgl" type="text" class="form-control" name="tanggal" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">s/d</span>
                                    <input type="text" class="form-control" name="sampai" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-round btn-primary btn-lg btn-block bg-light-blue-a400"><i class="icon md-print" aria-hidden="true"></i> Print</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection