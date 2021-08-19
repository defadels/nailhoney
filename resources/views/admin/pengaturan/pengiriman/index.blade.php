@extends('layout.admin_layout')

@section('title', 'Tabel Pengiriman')

@section('description', '$description')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Pengiriman</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Tabel Pengiriman</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
						<a href="{{ route('admin.pengaturan.pengiriman.create') }}" class="btn btn-light">Tambah</a>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Pengiriman</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Keterangan</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@foreach($daftar_pengiriman as $pengiriman)
										<tr>
											<th>{{ $pengiriman->nama }}</th>
											<td>{{ $pengiriman->keterangan }}</td>
											<td>{{ $pengiriman->status }}</td>
											<td>
												<a href="{{ route('admin.pengaturan.pengiriman.edit', $pengiriman->id) }}" class="btn btn-warning">Edit</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
    @endsection