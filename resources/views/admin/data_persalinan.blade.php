@extends('layout.layout')

@section('title', 'Data Persalinan')

@section('content')
<div class="justify-content-center">
	<h4 class="content-title mb-1" style="padding-top: 2.5cm; padding-left:1.5cm">Data Persalinan</h4>
	<nav aria-label="breadcrumb">
	</nav>
</div>
            <div class="container-fluid mg-t-20">

				

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
							     <form method="post" action="#">
							         @csrf
							        <div class="input-group mb-4">
							            <input type="text" placeholder="Cari Persalinan.." required class="form-control" name="keyword">
							            <button type="submit" class="btn btn-primary">Cari</button>
							        </div>
							    </form>
							    <a href="/tambah_persalinan" class="btn btn-success mb-3">Tambah</a>
								<div class="table-responsive">
								    @if(session('sukses'))
								    <div class="alert alert-success my-4">
								        {{session('sukses')}}
								    </div>
								    @endif
								    
								    @if(session('hapus'))
								    <div class="alert alert-warning my-4">
								        {{session('hapus')}}
								    </div>
								    @endif
								    
								    @if(session('update')) 
								    <div class="alert alert-info my-4">
								        {{session('update')}}
								    </div>
								    @endif
									<table class="table table-striped mg-b-0 text-md-nowrap border">
										<thead>
					                        <tr>
												<th>No</th>
												<th>Nama</th>
		                  						<th>Tanggal Pemeriksaan</th>
												<th>Keluhan</th>
												<th>Riwayat Pasien</th>
												<th>Hasil Pemeriksaan</th>
												<th>Analisa Pasien</th>
												<th>Penatalaksanaan</th>
												<th>Laporan</th>

											</tr>
										</thead>
										<tbody>

                                        <?php //rumus: ($pasien->currentPage()*jumlah data per halaman) - (jumlah data per halaman - 1) 
                                        $i = ($persalinan->currentPage()*10) - 9 ?>

					                        @foreach($persalinan as $p)						
                                            <tr>
												<th scope="row">{{$i++}}</th>
												<td>{{$p->nama}}</td>
												<td>{{$p->tglPemeriksaan}}</td>
												<td>{{$p->keluhan}}</td>
												<td>{{$p->riwayatPasien}}</td>
												<td>{{$p->hasilPemeriksaan}}</td>
												<td>{{$p->analisaPasien}}</td>
												<td>{{$p->penatalaksanaanAsuhan}}</td>
												<td>{{$p->laporanPersalinan}}</td>

                            <a href="#"><i class="fas fa-pencil-alt" style="margin-right:5px"></i></a>
                            <form method="post" class="d-inline" action="#">
                                @csrf
                                <input type="hidden" name="id" value="#}">
                            <button class="btn" type="submit"><i class="far fa-trash-alt"></i></button>
                            </form>
									    		</td>
											</tr>
											
					@endforeach
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						{{$persalinan->links()}}
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection