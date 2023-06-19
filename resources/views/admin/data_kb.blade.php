@extends('layout.layout')

@section('title', 'Data KB')

@section('content')
            <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1" style="margin-left: 0.5cm">Data KB</h4>
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
		                  						<th>Tanggal Pemeriksaan</th>
												<th>Tujuan Kunjungan</th>
												<th>Metode KB<</th>
												<th>Skrining Kesehatan</th>
												<th>Analisa Pasien</th>
												<th>Penatalaksanaan</th>

											</tr>
										</thead>
										<tbody>

                                        <?php //rumus: ($pasien->currentPage()*jumlah data per halaman) - (jumlah data per halaman - 1) 
                                        $i = ($kb->currentPage()*10) - 9 ?>

					                        @foreach($kb as $k)						
                                            <tr>
												<th scope="row">{{$i++}}</th>
												<td>{{$k->tglPemeriksaan}}</td>
												<td>{{$k->tujuanKunjungan}}</td>
												<td>{{$k->metodeKb}}</td>
												<td>{{$k->skriningKesehatan}}</td>
												<td>{{$k->analisaPasien}}</td>
												<td>{{$k->penatalaksanaanAsuhan}}</td>

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
						{{$kb->links()}}
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection