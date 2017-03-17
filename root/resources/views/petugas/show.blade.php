@extends('layouts.new')

@section('title','Data Petugas Detail')

@section('content')
<div class="row">
    <div class="col-md-6 col-lg-6 col-md-offset-3">
        @if(Session::has('message'))
        <div class="alert dark alert-icon alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon md-check" aria-hidden="true"></i> <strong>Success!</strong> {!! session('message') !!}
        </div>
        @endif
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading bg-light-blue-a400">
                <h3 class="panel-title">Detail Data Petugas {{$datapetugas->nama}}</h3>
                <div class="panel-actions hidden-xs">
                <a class="panel-action icon md-minus" data-toggle="panel-collapse" aria-expanded="true"
                aria-hidden="true"></a>
                <a class="panel-action icon md-fullscreen" data-toggle="panel-fullscreen" aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-offset-4 col-md-4 col-lg-4 text-center">
                  @if (isset($datapetugas->foto))
                  <img src="{{asset('foto/'.$datapetugas->foto)}}" class="img-responsive img-thumbnail" alt="Foto {{$datapetugas->nama}}" style="height: 200px">
                  @else
                  @if ($datapetugas->jenis_kelamin === 'L')
                  <img src="{{asset('foto/dummymale.jpg')}}" class="img-responsive img-thumbnail" alt="Tidak ada foto" style="height: 200px">
                  @else
                  <img src="{{asset('foto/dummyfemale.jpg')}}" class="img-responsive img-thumbnail" alt="Tidak ada foto" style="height: 200px">
                  @endif
                  @endif
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <th class="text-right" width="150px">NIK</th>
                          <th width="10px">:</th>
                          <td>{{$datapetugas->nik}}</td>
                        </tr>
                        <tr>
                          <th class="text-right" width="150px">Nama</th>
                          <th width="10px">:</th>
                          <td>{{$datapetugas->nama}}</td>
                        </tr>
                        <tr>
                          <th class="text-right" width="150px">Tanggal Lahir</th>
                          <th width="10px">:</th>
                          <td>{{$datapetugas->tgl_lahir}}</td>
                        </tr>
                        <tr>
                          <th class="text-right" width="150px">Jenis Kelamin</th>
                          <th width="10px">:</th>
                          <td>{{$datapetugas->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                          <th class="text-right" width="150px">Alamat</th>
                          <th width="10px">:</th>
                          <td>{{$datapetugas->alamat}}</td>
                        </tr>
                        <tr>
                          <th class="text-right" width="150px">No HP</th>
                          <th width="10px">:</th>
                          <td>{{$datapetugas->no_hp}}</td>
                        </tr>
                        <tr>
                          <th class="text-right" width="150px">Created at</th>
                          <th width="10px">:</th>
                          <td>{{$datapetugas->created_at}}</td>
                        </tr>
                        <tr>
                          <th class="text-right" width="150px">Updated at</th>
                          <th width="10px">:</th>
                          <td>{{$datapetugas->updated_at}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="text-center">
                  @if(Auth::user()->level == 'Supervisor')
                  <a class="btn btn-primary" href="{{url('/petugas')}}" role="button"><i class="icon md-chevron-left"></i> Kembali</a>
                  @endif
                  @if(Auth::user()->level == 'Staff')
                  <form id="delete" action="{{url('petugas/'.$datapetugas->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="btn-group">
                      <a href="{{url('/petugas')}}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Kembali"><i class="icon md-chevron-left"></i></button>
                        <a class="btn btn-default" href="{{url('/petugas/'.$datapetugas->id.'/edit')}}" role="button" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="icon md-edit"></i></a>
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="icon md-delete"></i></button>
                      </div>
                    </form>
                    @endif
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection