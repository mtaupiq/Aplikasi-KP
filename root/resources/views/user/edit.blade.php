@extends('layouts.new')

@section('title','Ubah Data User')

@section('content')
<div class="row">
    <div class="col-md-8 col-lg-8 col-md-offset-2">
        <!-- Flash Message -->
        @if(Session::has('message'))
        <div class="alert dark alert-icon alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon md-check" aria-hidden="true"></i> <strong>Success!</strong> {!! session('message') !!}
        </div>
        @endif
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading bg-light-blue-a400">
                <h3 class="panel-title">Ubah Data User {{ $datauser->name }}</h3>
                <div class="panel-actions hidden-xs">
                    <a class="panel-action icon md-minus" data-toggle="panel-collapse" aria-expanded="true"
                    aria-hidden="true"></a>
                    <a class="panel-action icon md-fullscreen" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                </div>
            </div>
            <div class="panel-body">
                <!-- Form Start -->
                <form action="{{ url('/user/'.$datauser->id) }}" method="POST" class="form-horizontal" role="form">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $datauser->name }}" placeholder="Nama Lengkap" required autofocus>

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
                                <input id="username" type="username" class="form-control" name="username" value="{{ $datauser->username }}" placeholder="Username" required>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ $datauser->email }}" placeholder="mail@example.com" required>

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
                                        @if($datauser->level == 'Supervisor')
                                            <input type="radio" name="level" value="Supervisor" checked> Supervisor
                                        @else
                                            <input type="radio" name="level" value="Supervisor"> Supervisor
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="radio">
                                    <label>
                                        @if($datauser->level == 'Staff')
                                            <input type="radio" name="level" value="Staff" checked> Staff
                                        @else
                                            <input type="radio" name="level" value="Staff"> Staff
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="radio">
                                    <label>
                                        @if($datauser->level == 'Auditor')
                                            <input type="radio" name="level" value="Auditor" checked> Auditor
                                        @else
                                            <input type="radio" name="level" value="Auditor"> Auditor
                                        @endif
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
                        <a href="{{url('/user')}}" type="button" class="btn btn-default" data-dismiss="modal"><i class="icon md-close"></i> Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="icon md-check"></i> Ubah</button>
                    </div>
                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>
</div>
@endsection