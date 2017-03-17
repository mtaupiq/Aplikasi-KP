@extends('layouts.new')

@section('title','Ubah Data Perbaikan')

@section('content')
<div class="row">
    <div class="col-md-6 col-lg-6 col-md-offset-3">
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading bg-light-blue-a400">
                <h3 class="panel-title">Ubah Data {{ $datalogbook->no_tiket }}</h3>
                <div class="panel-actions hidden-xs">
                    <a class="panel-action icon md-minus" data-toggle="panel-collapse" aria-expanded="true"
                    aria-hidden="true"></a>
                    <a class="panel-action icon md-fullscreen" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                </div>
            </div>
            <div class="panel-body">
                <form action="{{ url('/logbook/'.$datalogbook->id) }}" method="POST" class="form-horizontal" role="form">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}

                    <!-- Input Tanggal -->
                    <div class="form-group{{ $errors->has('tanggal') ? ' has-error has-feedback' : '' }}">
                        <label for="tanggal" class="col-md-3 control-label">Tanggal</label>

                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="tanggal" name="tanggal" value="{{ $datalogbook->tanggal }}" type="text" class="form-control" required>
                                <span class="input-group-addon">
                                    <i class="icon md-calendar" aria-hidden="true"></i>
                                </span>
                            </div>

                            @if ($errors->has('tanggal'))
                            <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                            <span id="inputWarning2Status" class="sr-only">(warning)</span>
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Input Tiket -->
                    <div class="form-group{{ $errors->has('tiket') ? ' has-error has-feedback' : '' }}">
                        <label for="tiket" class="col-md-3 control-label">Tiket</label>

                        <div class="col-md-2">
                            <input id="tiket" type="text" class="form-control" name="tiket" value="OSS" aria-describedby="inputWarning2Status" required>

                            @if ($errors->has('tiket'))
                            <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                            <span id="inputWarning2Status" class="sr-only">(warning)</span>
                            <span class="help-block">
                                <strong>{{ $errors->first('tiket') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Input No Tiket -->
                    <div class="form-group{{ $errors->has('no_tiket') ? ' has-error has-feedback' : '' }}">
                        <label for="no_tiket" class="col-md-3 control-label">No Tiket</label>

                        <div class="col-md-4">
                            <input id="no_tiket" type="text" class="form-control" name="no_tiket" value="{{ $datalogbook->no_tiket }}" aria-describedby="inputWarning2Status" placeholder="INxxxxxxx" required>

                            @if ($errors->has('no_tiket'))
                            <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                            <span id="inputWarning2Status" class="sr-only">(warning)</span>
                            <span class="help-block">
                                <strong>{{ $errors->first('no_tiket') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Input WO -->
                    <div class="form-group{{ $errors->has('wo') ? ' has-error has-feedback' : '' }}">
                        <label for="wo" class="col-md-3 control-label">WO</label>

                        <div class="col-md-4">
                            <input id="wo" type="text" class="form-control" name="wo" value="{{ $datalogbook->wo }}" aria-describedby="inputWarning2Status" placeholder="WOxxxxxxx">

                            @if ($errors->has('wo'))
                            <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                            <span id="inputWarning2Status" class="sr-only">(warning)</span>
                            <span class="help-block">
                                <strong>{{ $errors->first('wo') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Input Lokasi -->
                    <div class="form-group{{ $errors->has('lokasi') ? ' has-error has-feedback' : '' }}">
                        <label for="lokasi" class="col-md-3 control-label">Lokasi</label>

                        <div class="col-md-2">
                            <input id="lokasi" type="text" class="form-control" name="lokasi" value="TSM" aria-describedby="inputWarning2Status" required>

                            @if ($errors->has('lokasi'))
                            <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                            <span id="inputWarning2Status" class="sr-only">(warning)</span>
                            <span class="help-block">
                                <strong>{{ $errors->first('lokasi') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Input Keterangan -->
                    <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                        <label for="keterangan" class="col-md-3 control-label">Keterangan</label>

                        <div class="col-md-9">
                            <textarea name="keterangan" id="keterangan" class="form-control" rows="3" placeholder="Keterangan" required>{{ $datalogbook->keterangan }}</textarea>

                            @if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Input Perbaikan -->
                    <div class="form-group{{ $errors->has('perbaikan') ? ' has-error' : '' }}">
                        <label for="perbaikan" class="col-md-3 control-label">Perbaikan</label>

                        <div class="col-md-9">
                            <select name="perbaikan[]" id="perbaikan" class="form-control" data-plugin="selectpicker" data-live-search="true"  title="Pilih Perbaikan" multiple required>
                                @foreach($listperbaikan as $id=>$item)
                                <option value="{{$id}}" data-icon="icon md-wrench"> {{$item}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('perbaikan'))
                            <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                            <span id="inputWarning2Status" class="sr-only">(warning)</span>
                            <span class="help-block">
                                <strong>{{ $errors->first('perbaikan') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Input Petugas -->
                    <div class="form-group{{ $errors->has('petugas') ? ' has-error has-feedback' : '' }}">
                        <label for="petugas" class="col-md-3 control-label">Petugas</label>

                        <div class="col-md-9">
                            <select name="petugas[]" id="petugas" class="form-control" data-plugin="selectpicker" data-live-search="true"  title="Pilih Petugas" multiple required>
                                @foreach($listpetugas as $id=>$item)
                                <option value="{{$id}}" data-icon="icon md-male"> {{$item}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('petugas'))
                            <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                            <span id="inputWarning2Status" class="sr-only">(warning)</span>
                            <span class="help-block">
                                <strong>{{ $errors->first('petugas') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <a href="{{url('logbook')}}" type="button" class="btn btn-default"><i class="icon md-close"></i> Batal</a>
                            <button type="submit" class="btn btn-info"><i class="icon md-check"></i> Ubah</button>
                        </div>
                    </div>
                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>
</div>
@endsection