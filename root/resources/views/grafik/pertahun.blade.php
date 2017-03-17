@extends('layouts.new')

@section('title','Grafik Logbook Gangguan OSS')

@section('header')
<h1 class="page-title">Aplikasi Logbook Gangguan OSS</h1>
<p class="page-description">
	PT. Telkom Akses Tasikmalaya.
</p>
@endsection

@section('content')
<div class="col-md-12">
	<div class="panel panel-bordered panel-primary">
		<div class="panel-heading bg-light-blue-a400">
			<h3 class="panel-title">Grafik Pertahun</h3>
			<div class="panel-actions hidden-xs">
				<a class="panel-action icon md-minus" data-toggle="panel-collapse" aria-expanded="true"
				aria-hidden="true"></a>
				<a class="panel-action icon md-fullscreen" data-toggle="panel-fullscreen" aria-hidden="true"></a>
			</div>
		</div>
		<div class="panel-body">
			{!! $tahun->render() !!}
		</div>
	</div>
</div>
@endsection