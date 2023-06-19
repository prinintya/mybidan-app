@extends('layout.layout')

@section('title', 'Data Nifas')

@section('content')
            <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1" style="margin-left: 0.5cm">Data Nifas</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
							     <form method="post" action="#">
							         @csrf
							        <div class="input-group mb-4">
							            <input type="text" placeholder="Cari Nifas." required class="form-control" name="keyword">
							            <button type="submit" class="btn btn-primary">Cari</button>
							        </div>
							    </form>
							    <a href="/tambah_nifas" class="btn btn-success mb-3">Tambah</a>
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
		                  						<th>Tanggal Pemeriksaan</th>
												<th>Keluhan</th>
												<th>Riwayat Pasien</th>
												<th>Hasil Pemeriksaan</th>
												<th>Analisa Pasien</th>
												<th>Penatalaksanaan</th>

											</tr>
										</thead>
										<tbody>

                                        <?php //rumus: ($pasien->currentPage()*jumlah data per halaman) - (jumlah data per halaman - 1) 
                                        $i = ($nifas->currentPage()*10) - 9 ?>

					                        @foreach($nifas as $n)						
                                            <tr>
												<th scope="row">{{$i++}}</th>
												<td>{{$n->tglPemeriksaan}}</td>
												<td>{{$n->keluhan}}</td>
												<td>{{$n->riwayatPasien}}</td>
												<td>{{$n->hasilPemeriksaan}}</td>
												<td>{{$n->analisaPasien}}</td>
												<td>{{$n->penatalaksanaanAsuhan}}</td>

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
						{{$nifas->links()}}
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection