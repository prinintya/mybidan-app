@extends('layout.layout')

@section('title', 'Rekam Medik')

@section('content')
<!-- breadcrumb -->

			<div class="justify-content-center">
				<h4 class="content-title mb-1" style="padding-top: 2.5cm; padding-left:1.5cm">Rekam Medik</h4>
				<nav aria-label="breadcrumb">
				</nav>
			</div>
            <div class="container-fluid mg-t-20">

				
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-md-12">
						<div class="card" style="padding-top: 0.2cm">
							<div class="card-body">
								
							     <form method="post" action="/cari_pasien">
							         @csrf
							        <div class="input-group mb-4">
							            <input type="text" placeholder="Cari Rekam Medik" required class="form-control" name="keyword">
							            <button type="submit" class="btn btn-primary">Cari</button>
							        </div>
							    </form>
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
												<th>No Rekam Medik</th>
		                  						<th>Nama</th>
												<th>Tanggal Lahir</th>
												<!--<th>Penyakit</th>-->
												<th>Tanggal Masuk</th>
												<th>Alamat</th>
												<th>Telepon</th>
												<!--<th>Pelayanan</th>-->
											</tr>
										</thead>
										<tbody>
					<?php 
					//rumus: ($pasien->currentPage()*jumlah data per halaman) - (jumlah data per halaman - 1) 
					$i = ($pasien->currentPage()*10) - 9 ?>
					  @foreach($pasien as $p)						<tr>
												<th scope="row">{{$i++}}</th>
												<td>{{$p->nama}}</td>
												<td>{{$p->tanggal_lahir}}</td>
												<td>{{$p->tanggal_pemeriksaan}}</td>
												<td>{{$p->alamat}}</td>
												<td>{{$p->telepon}}</td>
												<td>

                            <a href="/edit_pasien/{{$p->id}}"><i class="fas fa-pencil-alt" style="margin-right:5px"></i></a>
                            <form method="post" class="d-inline" action="/hapus_pasien">
                                @csrf
                                <input type="hidden" name="id" value="{{$p->id}}">
                            <button class="btn" type="submit"><i class="far fa-trash-alt" style="color: red"></i></button>
								
							</div>
                            </form>
									    		</td>
											</tr>
											
					@endforeach
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						{{$pasien->links()}}
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection