@extends('layout.layout')

@section('title', 'Home')

@section('content')
<div class="bg-image shadow-2-strong">
	<div class="mask" style="background-color: rgba(241, 50, 200, 0.8);">
	  <div class="container d-flex align-items-center justify-content-center text-center" style="padding-top:6cm;padding-bottom:6.85cm">
		<div class="text-white" style="font-family:cursive">
		  <h1 class="mb-3">Selamat Datang</h1>
		  <h5 class="mb-4">di Aplikasi MyBidan</h5>
		  <a class="btn btn-outline-light btn-lg m-2" href="/data_pasien" role="button">Data Pasien</a>
		
		<a class="btn btn-outline-light btn-lg m-2" href="/keuangan" role="button">Laporan Keuangan</a>	
		</div>
	</div>
</div>

@endsection 