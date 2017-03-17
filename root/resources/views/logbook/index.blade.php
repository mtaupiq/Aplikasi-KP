@extends('layouts.new')

@section('title','Logbook Gangguan')

@section('content')
@include('logbook.modal')
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
                <h3 class="panel-title">Logbook Gangguan OSS</h3>
                <div class="panel-actions hidden-xs">
                @if(Auth::user()->level == 'Staff')
                <a class="btn btn-flat btn-default" data-target="#tambah" data-toggle="modal" type="button">Tambah Data</a>
                @endif
                <a class="btn btn-flat btn-default icon md-minus" data-toggle="panel-collapse" aria-expanded="true"
                aria-hidden="true"></a>
                <a class="btn btn-flat btn-default icon md-fullscreen" data-toggle="panel-fullscreen" aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
                <table class="display nowrap table table-hover table-condensed" id="mydata" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                        @if(Auth::user()->level == 'Staff')
                            <th class="text-center"><i class="icon md-settings"></i></th>
                        @endif
                            <th class="text-center">No</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Tiket</th>
                            <th class="text-center">No Tiket</th>
                            <th class="text-center">WO</th>
                            <th class="text-center">Lokasi</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Perbaikan</th>
                            <th class="text-center">Petugas</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datalogbook as $no=>$item)
                        <tr>
                        @if(Auth::user()->level == 'Staff')
                            <td class="text-center">
                                <form id="deleteform" action="{{url('logbook/'.$item->id)}}" method="post">
                                    {{csrf_field()}}
                                    <a class="btn btn-sm btn-icon btn-flat btn-default" href="{{url('logbook/'.$item->id.'/edit')}}" role="button" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="blue-600 icon md-edit"></i></a>
                                    <input type="hidden" name="_method" value="delete">
                                    <button id="delete" type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="red-600 icon md-delete"></i></button>
                                </form>
                            </td>
                        @endif
                            <td style="text-align: center; vertical-align: middle;">{{$no+1}}</td>
                            <td style="text-align: center; vertical-align: middle;">{{$item->tanggal}}</td>
                            <td style="text-align: center; vertical-align: middle;">{{$item->tiket}}</td>
                            <td style="text-align: center; vertical-align: middle;">{{$item->no_tiket}}</td>
                            <td style="text-align: center; vertical-align: middle;">{{$item->wo}}</td>
                            <td style="text-align: center; vertical-align: middle;">{{$item->lokasi}}</td>
                            <td style="vertical-align: middle;">{{$item->keterangan}}</td>
                            <td style="vertical-align: middle;">
                            @foreach($item->perbaikan as $list)
                                {{$list->perbaikan}},
                            @endforeach
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                            @foreach($item->petugas as $list)
                                {{$list->nama}},
                            @endforeach
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