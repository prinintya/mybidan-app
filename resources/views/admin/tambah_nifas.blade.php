@extends('layout.layout')

@section('title', 'Tambah Nifas')

@section('content')
    <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Tambah Nifas</h4>
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
                        <form method="post" action="/store_nifas">
                            @csrf
                            <div class="mb-3">
                                <label for="tglPemeriksaan">Tanggal Pemeriksaan</label>
                                <input type="date" name="tglPemeriksaan" required class="form-control" id="tglPemeriksaan" value="{{ old('tglPemeriksaan') }}">
                            </div>

                            <div class="mb-3">
                                <label for="keluhan">Keluhan</label>
                                <input type="text" name="keluhan" class="form-control" id="keluhan" value="{{ old('keluhan') }}">
                            </div>

                            <div class="mb-3">
                                <label for="riwayatPasien">Riwayat Pasien</label>
                                <input type="text" name="riwayatPasien" class="form-control" id="riwayatPasien" value="{{ old('riwayatPasien') }}">
                            </div>

                            <div class="mb-3">
                                <label for="hasilPemeriksaan">Hasil Pemeriksaan</label>
                                <input type="text" name="hasilPemeriksaan" class="form-control" id="hasilPemeriksaan" value="{{ old('hasilPemeriksaan') }}">
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