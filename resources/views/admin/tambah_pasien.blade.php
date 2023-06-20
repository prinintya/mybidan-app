@extends('layout.layout')

@section('title', 'Tambah Pasien')

@section('content')
<div class="justify-content-center">
	<h4 class="content-title mb-1" style="padding-top: 2.5cm; padding-left:1.5cm">Tambah Pasien</h4>
	<nav aria-label="breadcrumb">
	</nav>
</div>
    <div class="container-fluid mg-t-20">

			

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-md-12" style="padding:3cm">
					    @if($errors->any())
					        <div class="alert alert-danger my-3">
					            <ul>
					                @foreach($errors->all() as $e)
					                <li>{{$e}}</li>
					                @endforeach
					            </ul>
					        </div>
					    @endif
                        <form method="post" action="/store_pasien">
                            @csrf
                            <div class="mb-3">
                                <label for="rekam_medik">No Rekam Medik</label>
                                <input type="number" class="form-control" name="rekam_medik" required id="rekam_medik" value="{{ old('rekam_medik') }}">
                            </div>
                            <div class="mb-3">
                                <label for="NIK">NIK</label>
                                <input type="number" class="form-control" name="nik" required id="NIK" value="{{ old('NIK') }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" required id="nama" value="{{ old('nama') }}">
                            </div>
                            <div class="mb-3">
                                <label for="Status">Status</label>
                                <input type="text" class="form-control" name="status" Status="Status" required id="Status" value="{{ old('Status') }}">
                            </div>
                            <div class="mb-3">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" place="Tempat Lahir" required id="Tempat Lahir" value="{{ old('Tempat Lahir') }}">
                            </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" required class="form-control" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                        </div>
                        <!--div class="mb-3">
                            <label for="penyakit">Penyakit</label>
                            <input type="text" name="penyakit" class="form-control" id="penyakit" value="{{ old('penyakit') }}">
                        </div>-->
                        <div class="mb-3">
                            <label for="tanggal_pemeriksaan">Tanggal Pemeriksaan</label>
                            <input type="date" name="tanggal_pemeriksaan" required class="form-control" id="tanggal_pemeriksaan" value="{{ old('tanggal_pemeriksaan') }}">
                        </div>
                        <div class="mb-3">
                            <label for="telepon">Telepon</label>
                            <input type="tel" name="telepon" id="telepon" class="form-control" required value="{{ old('telepon') }}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" required>{{ old('alamat') }}</textarea>
                        </div>
                        






                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        </form>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection