@extends('layout.layout')

@section('title', 'Cari Pasien')

@section('content')
            <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1"  style="padding: 2cm">Cari Pasien</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
						<div class="card" style="padding-top: 3cm">
							<div class="card-body">
                   
								<div class="table-responsive">
								    <a href="/data_pasien">Kembali</a>
								    <p>{{count($pasien)}} hasil pencarian untuk <b>{{$keyword}}</b></p>

									<table class="table table-striped mg-b-0 text-md-nowrap border">
										<thead>
								
					<tr>
												<th>No Rekam Medik</th>

		                  <th>Nama</th>
												<th>Tanggal Lahir</th>
												
												<th>Tanggal Masuk</th>
												<th>Alamat</th>
												<th>Telepon</th>
												
											</tr>
										</thead>
										<tbody>
					<?php $i=1 ?>
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
                            <button class="btn" onclick="return confirm('Yakin mau menghapus?')"><i class="far fa-trash-alt"></i></button>
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pelayanan
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="/data_kehamilan">Kehamilan</a>
									<a class="dropdown-item" href="/data_persalinan">Persalinan</a>
									<a class="dropdown-item" href="/data_nifas">Nifas</a>
									<a class="dropdown-item" href="/data_kb">KB</a>		
								</div>
							</div>
							<button type="button" class="btn btn-warning" style="margin-top:2px" href="/riwayat_pasien" >Riwayat</button>
                            </form>
									    		</td>
											</tr>
											
					@endforeach
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection