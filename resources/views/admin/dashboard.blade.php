@extends('layout.layout')

@section('title', 'Home')

@section('content')
<div class="container-fluid justify-content-center">
	<div class="p-4 text-center">
		<h1 class="content-title mb-1" style="padding-top:4cm;padding-left:3.5cm;font-size: 4rem;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Selamat Datang di Aplikasi MyBidan </h1>
	</div>
	<div class="button" style="padding-left: 10cm; padding-top:1.5cm">
		<a class="btn btn-primary btn-lg" style="margin-left:2px" href="/data_pasien" >Data Pasien</a>
		<button class="btn btn-primary btn-lg dropdown-toggle" style="margin-left:2px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Pilih Pelayanan
		</button>
		<div class="dropdown-menu bg-danger" style="font-color: white" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="/data_kehamilan">Kehamilan</a>
			<a class="dropdown-item" href="/data_persalinan">Persalinan</a>
			<a class="dropdown-item" href="/data_nifas">Nifas</a>
			<a class="dropdown-item" href="/data_kb">KB</a>		
		</div>
		<a class="btn btn-primary btn-lg" style="margin-left:2px" href="/rekam_medik" >Laporan Rekam Medik</a>
		<a class="btn btn-primary btn-lg" style="margin-left:2px" href="/keuangan" >Laporan Keuangan</a>
	</div>
	
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-bottom">
	<div class="">
			<span>Copyright © 2023 INFORMATICS PROGRAMMING TEAM TEL-U </span>
		</div>
	</div>
	</nav>
</div>
	
	

@endsection 