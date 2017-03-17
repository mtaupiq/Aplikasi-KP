@extends('layouts.new')

@section('title','Ubah Data Perbaikan')

@section('content')
<div class="row">
    <div class="col-md-8 col-lg-8 col-md-offset-2">
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading bg-light-blue-a400">
                <h3 class="panel-title">Ubah Data Perbaikan</h3>
                <div class="panel-actions hidden-xs">
                <a class="panel-action icon md-minus" data-toggle="panel-collapse" aria-expanded="true"
                aria-hidden="true"></a>
                <a class="panel-action icon md-fullscreen" data-toggle="panel-fullscreen" aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
                <form action="{{ url('/perbaikan/'.$dataperbaikan->id) }}" method="POST" class="form-horizontal" role="form">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <!-- Input Nama Perbaikan -->
                        <div class="form-group{{ $errors->has('perbaikan') ? ' has-error has-feedback' : '' }}">
                            <label for="perbaikan" class="col-md-3 control-label">Perbaikan</label>

                            <div class="col-md-9">
                            <input id="perbaikan" type="text" class="form-control" name="perbaikan" value="{{$dataperbaikan->perbaikan}}" aria-describedby="inputWarning2Status" placeholder="Nama Perbaikan" required>

                                @if ($errors->has('perbaikan'))
                                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                                <span id="inputWarning2Status" class="sr-only">(warning)</span>
                                <span class="help-block">
                                    <strong>{{ $errors->first('perbaikan') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- Input Deskripsi -->
                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                            <label for="deskripsi" class="col-md-3 control-label">Deskripsi</label>

                            <div class="col-md-9">
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder="Deskripsi Perbaikan" required>{{ $dataperbaikan->deskripsi }}</textarea>

                                @if ($errors->has('deskripsi'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('deskripsi') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="{{url('perbaikan')}}" type="button" class="btn btn-default"><i class="icon md-close"></i> Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="icon md-check"></i> Ubah</button>
                    </div>
                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>
</div>
@endsection