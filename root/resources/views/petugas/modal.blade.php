<!-- Modal -->
<div class="modal fade modal-3d-sign" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Tambah Data Petugas</h4>
            </div>
            <!-- Form Start -->
            <form action="{{ route('petugas.store') }}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
                <!-- Input NIK -->
                <div class="form-group{{ $errors->has('nik') ? ' has-error ' : '' }}">
                    <label for="nik" class="col-md-3 control-label">NIK</label>

                    <div class="col-md-6">
                        <input id="nik" type="text" class="form-control" name="nik" value="{{ old('nik') }}" placeholder="NIK" required>

                        @if ($errors->has('nik'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nik') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input Nama Petugas -->
                <div class="form-group{{ $errors->has('nama') ? ' has-error ' : '' }}">
                    <label for="nama" class="col-md-3 control-label">Nama</label>

                    <div class="col-md-6">
                        <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" placeholder="Nama Petugas" required>

                        @if ($errors->has('nama'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input Tanggal Lahir -->
                <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-error ' : '' }}">
                    <label for="tanggal" class="col-md-3 control-label">Tanggal Lahir</label>

                    <div class="col-md-4">
                        <div class="input-group">
                          <input id="tanggal" name="tgl_lahir" value="{{ old('tgl_lahir') }}" type="text" class="form-control" data-plugin="datepicker" required>
                          <span class="input-group-addon">
                              <i class="icon md-calendar" aria-hidden="true"></i>
                          </span>
                      </div>

                        @if ($errors->has('tgl_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tgl_lahir') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input Jenis Kelamin -->
                <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error ' : '' }}">
                    <label for="jenis_kelamin" class="col-md-3 control-label">Jenis Kelamin</label>

                    <div class="col-md-3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis_kelamin" value="L">
                                Laki-laki
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis_kelamin" value="P">
                                Perempuan
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
                        <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Alamat Petugas" required>{{ old('alamat') }}</textarea>

                        @if ($errors->has('alamat'))
                        <span class="help-block">
                            <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input Nomor HP -->
                <div class="form-group{{ $errors->has('no_hp') ? ' has-error ' : '' }}">
                    <label for="no_hp" class="col-md-3 control-label">No HP</label>

                    <div class="col-md-4">
                        <input id="no_hp" type="text" class="form-control" name="no_hp" value="{{ old('no_hp') }}" placeholder="Nomor HP Petugas" required>

                        @if ($errors->has('no_hp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('no_hp') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Input Foto -->
                <div class="form-group{{ $errors->has('foto') ? ' has-error ' : '' }}">
                    <label for="foto" class="col-md-3 control-label">Foto</label>

                    <div class="col-md-4">
                        <input type="file" class="dropify" name="foto" data-allowed-file-extensions="png jpg jpeg gif" data-max-file-size="150K">
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
                <button type="button" class="btn btn-default btn-pure" data-dismiss="modal"><i class="icon md-close"></i> Batal</button>
                <button type="submit" class="btn btn-primary"><i class="icon md-check"></i> Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->