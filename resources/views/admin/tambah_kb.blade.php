@extends('layout.layout')

@section('title', 'Tambah KB')

@section('content')
    <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Tambah KB</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
					    @if($errors->any())
					        <div class="alert alert-danger my-3">
					            <ul>
					                @foreach($errors->all() as $e)
					                <li>{{$e}}</li>
					                @endforeach
					            </ul>
					        </div>
					    @endif
                        <form method="post" action="/store_kb">
                            @csrf
                            <div class="mb-3">
                                <label for="tglPemeriksaan">Tanggal Pemeriksaan</label>
                                <input type="date" name="tglPemeriksaan" required class="form-control" id="tglPemeriksaan" value="{{ old('tglPemeriksaan') }}">
                            </div>

                            <div class="mb-3">
                                <label for="tujuanKunjungan">Tujuan Kunjungan</label>
                                <input type="text" name="tujuanKunjungan" class="form-control" id="tujuanKunjungan" value="{{ old('tujuanKunjungan') }}">
                            </div>

                            <div class="mb-3">
                                <label for="metodeKb">Metode KB</label>
                                <input type="text" name="metodeKb" class="form-control" id="metodeKb" value="{{ old('metodeKb') }}">
                            </div>

                            <div class="mb-3">
                                <label for="skriningKesehatan">Skrining Kesehatan</label>
                                <input type="text" name="skriningKesehatan" class="form-control" id="skriningKesehatan" value="{{ old('skriningKesehatan') }}">
                            </div>

                            <div class="mb-3">
                                <label for="analisaPasien">Analisa Pasien</label>
                                <input type="text" name="analisaPasien" class="form-control" id="analisaPasien" value="{{ old('analisaPasien') }}">
                            </div>

                            <div class="mb-3">
                                <label for="penatalaksanaanAsuhan">Penatalaksanaan Asuhan</label>
                                <input type="text" name="penatalaksanaanAsuhan" class="form-control" id="penatalaksanaanAsuhan" value="{{ old('penatalaksanaanAsuhan') }}">
                            </div>
                        
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        </form>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection