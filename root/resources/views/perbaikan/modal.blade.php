<!-- Modal -->
<div class="modal fade modal-3d-sign" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Tambah Data Perbaikan</h4>
            </div>
            <!-- Form Start -->
            <form action="{{ route('perbaikan.store') }}" method="POST" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <div class="modal-body">
                <!-- Input Nama Perbaikan -->
                <div class="form-group{{ $errors->has('perbaikan') ? ' has-error' : '' }}">
                    <label for="perbaikan" class="col-md-3 control-label">Perbaikan</label>

                    <div class="col-md-9">
                        <input id="perbaikan" type="text" class="form-control" name="perbaikan" value="{{ old('perbaikan') }}" aria-describedby="inputWarning2Status" placeholder="Nama Perbaikan" required>

                        @if ($errors->has('perbaikan'))
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
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder="Deskripsi Perbaikan" required>{{ old('deskripsi') }}</textarea>

                        @if ($errors->has('deskripsi'))
                        <span class="help-block">
                            <strong>{{ $errors->first('deskripsi') }}</strong>
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