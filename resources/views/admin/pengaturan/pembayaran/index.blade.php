@extends('layout.admin_layout')

@section('title', 'Tabel Pembayaran')

@section('description', '$description')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Pembayaran</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
						<a href="{{ route('admin.pengaturan.pembayaran.create') }}" class="btn btn-light">Tambah</a>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Pembayaran</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Keterangan</th>
											<th>Jenis</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@foreach($daftar_pembayaran as $pembayaran)
										<tr>
											<th>{{ $pembayaran->nama }}</th>
											<td>{{ $pembayaran->keterangan }}</td>
											<td>{{ $pembayaran->jenis }}</td>
											<td>{{ $pembayaran->status }}</td>
											<td>
												<a href="" class="btn btn-primary">Lihat</a>
												<a href="{{ route('admin.pengaturan.pembayaran.edit', $pembayaran->id) }}" class="btn btn-warning">Edit</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
    @endsection