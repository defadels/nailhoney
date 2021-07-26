@extends('layout.admin_layout')

@section('title', 'Penjualan DIkirim')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Penjualan Dikirim</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Penjualan Dikirim</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th>Tanggal</th>
											<th>Invoice</th>
											<th>Kurir</th>
											<th>Ongkir</th>
											<th>No. Resi</th>
											<th>Kota</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>25/02/2021</td>
											<td>INV00001</td>
											<td>JNE</td>
											<td>20.000</td>
											<td>12341234</td>
											<td>Medan</td>
											<td>	
												<a href="" class="btn btn-outline-warning">Lihat</a>	
												<a href="" class="btn btn-outline-danger">Lacak</a>	
												<a href="" class="btn btn-outline-success">Proses</a>	
											</td>
										</tr>
			
									</tbody>
								</table>
							</div>
						</div>
					</div>
    @endsection