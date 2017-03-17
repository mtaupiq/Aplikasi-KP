@extends('layouts.new')

@section('title','Data Petugas')

@section('content')
@include('petugas.modal')
<div class="row">
    <div class="col-md-12">
        <!-- Flash Message -->
        @if(Session::has('message'))
        <div class="alert dark alert-icon alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon md-check" aria-hidden="true"></i> <strong>Success!</strong> {!! session('message') !!}
        </div>
        @endif
        @if(count($errors) > 0)
        <div class="alert dark alert-icon alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading bg-light-blue-a400">
                <h3 class="panel-title">Data Petugas</h3>
                <div class="panel-actions hidden-xs">
                @if(Auth::user()->level == 'Staff')
                <a class="btn btn-flat btn-default" data-target="#examplePositionCenter" data-toggle="modal" type="button">Tambah Data</a>
                @endif
                <a class="panel-action icon md-minus" data-toggle="panel-collapse" aria-expanded="true"
                aria-hidden="true"></a>
                <a class="panel-action icon md-fullscreen" data-toggle="panel-fullscreen" aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
               <table class="table table-hover dataTable width-full" id="mydata">
                    <thead>
                        <tr>
                          <th class="text-center" width="15px">No</th>
                          <th class="text-center" width="100px">NIK</th>
                          <th class="text-center">Nama</th>
                          <th class="text-center" width="75px">Tgl Lahir</th>
                          <th class="text-center" width="25px">L/P</th>
                          <th class="text-center">Alamat</th>
                          <th class="text-center" width="75px">No HP</th>
                          <th class="text-center" width="90px"><i class="icon md-settings"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datapetugas as $no=>$item)
                        <tr>
                          <td style="text-align: center; vertical-align: middle;">{{$no+1}}</td>
                          <td style="text-align: center; vertical-align: middle;">{{$item->nik}}</td>
                          <td style="vertical-align: middle;">{{$item->nama}}</td>
                          <td style="text-align: center; vertical-align: middle;">{{$item->tgl_lahir}}</td>
                          <td style="text-align: center; vertical-align: middle;">{{$item->jenis_kelamin}}</td>
                          <td style="vertical-align: middle;">{{$item->alamat}}</td>
                          <td style="text-align: center; vertical-align: middle;">{{$item->no_hp}}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <form id="deleteform" action="{{url('petugas/'.$item->id)}}" method="post">
                                  {{csrf_field()}}
                                  <a class="btn btn-sm btn-icon btn-flat btn-default" href="{{url('petugas/'.$item->id)}}" role="button" data-toggle="tooltip" data-placement="top" title="Lihat">
                                  @if(Auth::user()->level == 'Staff')
                                  <i class="icon md-eye"></i>
                                  @else
                                  Detail
                                  @endif
                                  </a>
                                  @if(Auth::user()->level == 'Staff')
                                  <a class="btn btn-sm btn-icon btn-flat btn-default" href="{{url('petugas/'.$item->id.'/edit')}}" role="button" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="blue-600 icon md-edit"></i></a>
                                  <input type="hidden" name="_method" value="delete">
                                  <button id="delete" type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="red-600 icon md-delete"></i></button>
                                  @endif
                              </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection