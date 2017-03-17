@extends('layouts.new')

@section('title','Data Perbaikan')

@section('content')
@include('perbaikan.modal')
<div class="row">
    <div class="col-md-8 col-lg-8 col-md-offset-2">
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
                <h3 class="panel-title">Data Perbaikan</h3>
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
                <table class="display nowrap table table-hover table-condensed" id="mydata" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="50px">No</th>
                            <th class="text-center">Perbaikan</th>
                            <th class="text-center">Deskripsi</th>
                        @if(Auth::user()->level == 'Staff')
                            <th class="text-center" width="60px"><i class="icon md-settings"></i></th>
                        @endif
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataperbaikan as $no=>$item)
                        <tr>
                            <td style="text-align: center; vertical-align: middle;">{{$no+1}}</td>
                            <td style="vertical-align: middle;">{{$item->perbaikan}}</td>
                            <td style="vertical-align: middle;">{{$item->deskripsi}}</td>
                        @if(Auth::user()->level == 'Staff')
                            <td>
                                <form id="deleteform" action="{{url('perbaikan/'.$item->id)}}" method="post">
                                  {{csrf_field()}}
                                  <a class="btn btn-sm btn-icon btn-flat btn-default" href="{{url('/perbaikan/'.$item->id.'/edit')}}" role="button" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="blue-600 icon md-edit"></i></a>
                                  <input type="hidden" name="_method" value="delete">
                                  <button id="delete" type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="red-600 icon md-delete"></i></button>
                              </form>
                            </td>
                        @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection