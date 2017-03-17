@extends('layouts.new')

@section('title','Beranda')

@section('header')
<h1 class="page-title">Aplikasi Logbook Gangguan OSS</h1>
<p class="page-description">
	PT. Telkom Akses Tasikmalaya.
</p>
@endsection

@section('content')
@if(Auth::user()->level == 'Auditor')
<div class="row">
	<div class="col-md-6 col-lg-6 col-md-offset-3">
		<div class="panel panel-bordered">
			<div class="panel-body text-center">
				<br>
				<h1>Selamat Datang!</h1><br>
				<span class="font-size-30">{{ Auth::user()->name }}</span>
				<br><br><br>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<a class="btn btn-round btn-primary btn-lg bg-light-blue-a400 text-uppercase" href="{{url('logbook')}}" role="button">mulai</a>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
</div>
@else
<div class="panel panel-bordered">
	<div class="panel-body">
		<br>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<!-- Widget -->
				<div class="widget">
					<div class="widget-content padding-30 bg-blue-600">
						<div class="widget-watermark darker font-size-60 margin-15"><i class="icon md-assignment" aria-hidden="true"></i></div>
						<div class="counter counter-md counter-inverse text-left">
							<div class="counter-number-group">
								<span class="counter-number">{{App\Logbook::count()}}</span>
								<span class="counter-number-related text-capitalize">gangguan</span>
							</div>
							<div class="counter-label text-capitalize">data logbook</div>
						</div>
					</div>
				</div>
				<!-- End Widget -->
			</div>

			<div class="col-sm-6 col-md-6 col-lg-6">
				<!-- Widget -->
				<div class="widget">
					<div class="widget-content padding-30 bg-red-600">
						<div class="widget-watermark darker font-size-60 margin-15"><i class="icon md-accounts" aria-hidden="true"></i></div>
						<div class="counter counter-md counter-inverse text-left">
							<div class="counter-number-group">
								<span class="counter-number">{{App\Petugas::count()}}</span>
								<span class="counter-number-related text-capitalize">petugas</span>
							</div>
							<div class="counter-label text-capitalize">data petugas</div>
						</div>
					</div>
				</div>
				<!-- End Widget -->
			</div>

			<div class="col-sm-6 col-md-6 col-lg-6">
				<!-- Widget -->
				<div class="widget">
					<div class="widget-content padding-30 bg-green-600">
						<div class="widget-watermark darker font-size-60 margin-15"><i class="icon md-wrench" aria-hidden="true"></i></div>
						<div class="counter counter-md counter-inverse text-left">
							<div class="counter-number-group">
								<span class="counter-number">{{App\Perbaikan::count()}}</span>
								<span class="counter-number-related text-capitalize">perbaikan</span>
							</div>
							<div class="counter-label text-capitalize">data perbaikan</div>
						</div>
					</div>
				</div>
				<!-- End Widget -->
			</div>

			<div class="col-sm-6 col-md-6 col-lg-6">
				<!-- Widget  -->
				<div class="widget">
					<div class="widget-content padding-30 bg-purple-600">
						<div class="widget-watermark lighter font-size-60 margin-15"><i class="icon md-account" aria-hidden="true"></i></div>
						<div class="counter counter-md counter-inverse text-left">
							<div class="counter-number-wrap font-size-30">
								<span class="counter-number">{{App\User::count()}}</span>
								<span class="counter-number-related text-capitalize">user</span>
							</div>
							<div class="counter-label text-capitalize">data user</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endsection