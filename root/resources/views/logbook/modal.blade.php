<!-- Modal -->
<div class="modal fade modal-3d-sign" id="tambah" aria-hidden="true" aria-labelledby="tambah" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Tambah Data Logbook</h4>
            </div>
            <!-- Form Start -->
            <form action="{{ route('logbook.store') }}" method="POST" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <div class="modal-body">
                <!-- Input Tanggal -->
                <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                    <label for="tanggal" class="col-md-3 control-label">Tanggal</label>

                    <div class="col-md-4">
                        <div class="input-group">
                            <input id="tanggal" name="tanggal" value="{{ old('tangga;') }}" type="text" class="form-control" required>
                            <span class="input-group-addon">
                                <i class="icon md-calendar" aria-hidden="true"></i>
                            </span>
                        </div>

                        @if ($errors->has('tanggal'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input Tiket -->
                <div class="form-group{{ $errors->has('tiket') ? ' has-error' : '' }}">
                    <label for="tiket" class="col-md-3 control-label">Tiket</label>

                    <div class="col-md-2">
                        <input id="tiket" type="text" class="form-control" name="tiket" value="OSS" aria-describedby="inputWarning2Status" required>

                        @if ($errors->has('tiket'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tiket') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input No Tiket -->
                <div class="form-group{{ $errors->has('no_tiket') ? ' has-error' : '' }}">
                    <label for="no_tiket" class="col-md-3 control-label">No Tiket</label>

                    <div class="col-md-4">
                        <input id="no_tiket" type="text" class="form-control" name="no_tiket" value="{{ old('no_tiket') }}" aria-describedby="inputWarning2Status" placeholder="INxxxxxxx" required>

                        @if ($errors->has('no_tiket'))
                        <span class="help-block">
                            <strong>{{ $errors->first('no_tiket') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input WO -->
                <div class="form-group{{ $errors->has('wo') ? ' has-error' : '' }}">
                    <label for="wo" class="col-md-3 control-label">WO</label>

                    <div class="col-md-4">
                        <input id="wo" type="text" class="form-control" name="wo" value="{{ old('wo') }}" aria-describedby="inputWarning2Status" placeholder="WOxxxxxxx">

                        @if ($errors->has('wo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('wo') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input Lokasi -->
                <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                    <label for="lokasi" class="col-md-3 control-label">Lokasi</label>

                    <div class="col-md-2">
                        <input id="lokasi" type="text" class="form-control" name="lokasi" value="TSM" aria-describedby="inputWarning2Status" required>

                        @if ($errors->has('lokasi'))
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
                        <textarea name="keterangan" id="keterangan" class="form-control" rows="3" placeholder="Keterangan" required>{{ old('keterangan') }}</textarea>

                        @if ($errors->has('keterangan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('keterangan') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input Perbaikan -->
                <div class="form-group{{ $errors->has('id_perbaikan') ? ' has-error' : '' }}">
                    <label for="perbaikan" class="col-md-3 control-label">Perbaikan</label>

                    <div class="col-md-9">
                        <select name="perbaikan[]" id="perbaikan" class="form-control" data-plugin="selectpicker" data-live-search="true"  title="Pilih Perbaikan" multiple required>
                        @foreach($listperbaikan as $id=>$item)
                            <option value="{{$id}}" data-icon="icon md-wrench"> {{$item}}</option>
                        @endforeach
                        </select>

                        @if ($errors->has('perbaikan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('perbaikan') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input Petugas -->
                <div class="form-group{{ $errors->has('petugas') ? ' has-error' : '' }}">
                    <label for="petugas" class="col-md-3 control-label">Petugas</label>

                    <div class="col-md-9">
                        <select name="petugas[]" id="petugas" class="form-control" data-plugin="selectpicker" data-live-search="true"  title="Pilih Petugas" multiple required>
                        @foreach($listpetugas as $id=>$item)
                            <option value="{{$id}}" data-icon="icon md-male"> {{$item}}</option>
                        @endforeach
                        </select>

                        @if ($errors->has('petugas'))
                        <span class="help-block">
                            <strong>{{ $errors->first('petugas') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-pure" data-dismiss="modal"><i class="icon md-close"></i> Batal</button>
                <button type="submit" class="btn btn-primary"><i class="icon md-check"></i> Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->