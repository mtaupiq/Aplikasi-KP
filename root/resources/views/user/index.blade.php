@extends('layouts.new')

@section('title','Data User')

@section('content')
@include('user.modal')
<div class="row">
    <div class="col-md-10 col-lg-10 col-md-offset-1">
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
                <h3 class="panel-title">Data User</h3>
                <div class="panel-actions hidden-xs">
                <a class="btn btn-flat btn-default" data-target="#examplePositionCenter" data-toggle="modal" type="button">Tambah User</a>
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
                          <th class="text-center">Nama</th>
                          <th class="text-center">Username</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">Level</th>
                          <th class="text-center">Created at</th>
                          <th class="text-center">Updated at</th>
                          <th class="text-center" width="90px"><i class="icon md-settings"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datauser as $no=>$item)
                        <tr>
                          <td class="text-center">{{$no+1}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->username}}</td>
                          <td>{{$item->email}}</td>
                          @if($item->level === 'Supervisor')
                          <td class="text-center"><span class="label label-success">{{$item->level}}</span></td>
                          @else
                          @if($item->level === 'Staff')
                          <td class="text-center"><span class="label label-info">{{$item->level}}</span></td>
                          @else
                          <td class="text-center"><span class="label label-default">{{$item->level}}</span></td>
                          @endif
                          @endif
                          <td>{{$item->created_at}}</td>
                          <td>{{$item->updated_at}}</td>
                            <td class="text-center">
                                <form id="deleteform" action="{{url('user/'.$item->id)}}" method="post">
                                  {{csrf_field()}}
                                  <a class="btn btn-sm btn-icon btn-flat btn-default" href="{{url('user/'.$item->id.'/edit')}}" role="button" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="blue-600 icon md-edit"></i></a>
                                  <input type="hidden" name="_method" value="delete">
                                  <button id="delete" type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="red-600 icon md-delete"></i></button>
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