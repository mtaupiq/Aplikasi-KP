@extends('layouts.new')

@section('title','Ubah Data Petugas')

@section('content')
<div class="row">
    <div class="col-md-8 col-lg-8 col-md-offset-2">
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading bg-light-blue-a400">
                <h3 class="panel-title">Ubah Data Petugas {{ $datapetugas->nama }}</h3>
                <div class="panel-actions hidden-xs">
                    <a class="panel-action icon md-minus" data-toggle="panel-collapse" aria-expanded="true"
                    aria-hidden="true"></a>
                    <a class="panel-action icon md-fullscreen" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                </div>
            </div>
            <div class="panel-body">
                <!-- Form Start -->
                <form action="{{ url('/petugas/'.$datapetugas->id) }}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <!-- Input NIK -->
                        <div class="form-group{{ $errors->has('nik') ? ' has-error has-feedback' : '' }}">
                            <label for="nik" class="col-md-3 control-label">NIK</label>

                            <div class="col-md-6">
                            <input id="nik" type="text" class="form-control" name="nik" value="{{ $datapetugas->nik }}" aria-describedby="inputWarning2Status" placeholder="nik Petugas" disabled>

                                @if ($errors->has('nik'))
                                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                                <span id="inputWarning2Status" class="sr-only">(warning)</span>
                                <span class="help-block">
                                    <strong>{{ $errors->first('nik') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- Input Nama Petugas -->
                        <div class="form-group{{ $errors->has('nama') ? ' has-error has-feedback' : '' }}">
                            <label for="nama" class="col-md-3 control-label">Nama</label>

                            <div class="col-md-6">
                            <input id="nama" type="text" class="form-control" name="nama" value="{{ $datapetugas->nama }}" aria-describedby="inputWarning2Status" placeholder="Nama Petugas" required>

                                @if ($errors->has('nama'))
                                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                                <span id="inputWarning2Status" class="sr-only">(warning)</span>
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- Input Tanggal Lahir -->
                        <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-error has-feedback' : '' }}">
                            <label for="tanggal" class="col-md-3 control-label">Tanggal Lahir</label>

                            <div class="col-md-4">
                            <input id="tanggal" type="text" class="form-control" name="tgl_lahir" value="{{ $datapetugas->tgl_lahir }}" aria-describedby="inputWarning2Status" placeholder="dd-mm-yyyy" required>

                                @if ($errors->has('tgl_lahir'))
                                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                                <span id="inputWarning2Status" class="sr-only">(warning)</span>
                                <span class="help-block">
                                    <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- Input Jenis Kelamin -->
                        <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error has-feedback' : '' }}">
                            <label for="jenis_kelamin" class="col-md-3 control-label">Jenis Kelamin</label>

                            <div class="col-md-3">
                                <div class="radio">
                                    <label>
                                    @if($datapetugas->jenis_kelamin === 'L')
                                        <input type="radio" name="jenis_kelamin" value="L" checked>
                                        Laki-laki
                                        @else
                                        <input type="radio" name="jenis_kelamin" value="L">
                                        Laki-laki
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="radio">
                                    <label>
                                    @if($datapetugas->jenis_kelamin === 'P')
                                        <input type="radio" name="jenis_kelamin" value="P" checked>
                                        Perempuan
                                        @else
                                        <input type="radio" name="jenis_kelamin" value="P">
                                        Perempuan
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                @if ($errors->has('jenis_kelamin'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- Input Alamat -->
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-3 control-label">Alamat</label>

                            <div class="col-md-9">
                            <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Alamat Petugas" required>{{ $datapetugas->alamat }}</textarea>

                                @if ($errors->has('alamat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- Input Nomor HP -->
                        <div class="form-group{{ $errors->has('no_hp') ? ' has-error has-feedback' : '' }}">
                            <label for="no_hp" class="col-md-3 control-label">No HP</label>

                            <div class="col-md-4">
                            <input id="no_hp" type="text" class="form-control" name="no_hp" value="{{ $datapetugas->no_hp }}" aria-describedby="inputWarning2Status" placeholder="Nomor HP Petugas" required>

                                @if ($errors->has('no_hp'))
                                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                                <span id="inputWarning2Status" class="sr-only">(warning)</span>
                                <span class="help-block">
                                    <strong>{{ $errors->first('no_hp') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- Input Foto -->
                        <div class="form-group{{ $errors->has('foto') ? ' has-error has-feedback' : '' }}">
                            <label for="foto" class="col-md-3 control-label">Foto</label>

                            <div class="col-md-4">
                                <input type="file" class="dropify" name="foto" data-max-file-size="150K" data-default-file="{{url('foto/'.$datapetugas->foto)}}">
                                <p class="help-block">*max file size is 150kb.</p>

                                @if ($errors->has('foto'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('foto') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="{{url('/petugas')}}" type="button" class="btn btn-default" data-dismiss="modal"><i class="icon md-close"></i> Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="icon md-check"></i> Ubah</button>
                    </div>
                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>
</div>
@endsection