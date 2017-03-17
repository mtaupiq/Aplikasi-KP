<!-- Modal -->
<div class="modal fade modal-3d-sign" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Tambah User</h4>
            </div>
            <!-- Form Start -->
            <form class="form-horizontal" role="form" method="POST" action="{{ route('user.store') }}">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="col-md-4 control-label">Username</label>

                    <div class="col-md-6">
                    <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required>

                        @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="mail@example.com" required>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                    <label for="level" class="col-md-4 control-label">Level</label>

                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="level" value="Supervisor">
                                Supervisor
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="level" value="Staff">
                                Staff
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="level" value="Auditor">
                                Auditor
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-4">
                        @if ($errors->has('level'))
                        <span class="help-block">
                            <strong>{{ $errors->first('level') }}</strong>
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