@extends('layout.layout')

@section('title', 'Home')

@section('content')

<div class="container mg-t-20">

	<div class="breadcrumb-header justify-content-between">

		
		<div class="left-content">
			<h4 class="content-title mb-1" style="margin-left: 0.5cm; font-size:50px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Selamat Datang, </h4>
			<nav aria-label="breadcrumb">
			</nav>
		</div>
	</div>
	<div class="container-fluid" style="margin-left:0.5cm; margin-top:3cm">
			<a href="/data_pasien" class="btn btn-primary btn-lg" >Data Pasien</a>	
			<a href="/riwayat_pasien" class="btn btn-primary btn-lg">Laporan Rekam Medik</a>		
			<a href="/keuangan" class="btn btn-primary btn-lg">Laporan Keuangan</a>
		</div>
	
</div>
@endsection 