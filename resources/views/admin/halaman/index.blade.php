@extends('layout.admin_layout')

@section('title', 'Halaman')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Halaman</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Halaman</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
						<a href="{{ route('admin.halaman.create') }}" class="btn btn-light">Tambah</a>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Halaman</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">Tanggal</th>
											<th scope="col">Judul</th>
											<th scope="col">Link</th>
											<th scope="col">Status</th>
											<th scope="col">Aksi</th>
										</tr>
									</thead>
									<tbody>
										@foreach($daftar_halaman as $halaman)
										<tr>
											<th>{{ $halaman->created_at }}</th>
											<td>{{ $halaman->judul }}</td>
											<td>{{ $halaman->link }}</td>
											<td>
											<button class="btn btn-primary">{{ $halaman->status }}</button>
											</td>
											<td>
											<a href="" class="btn btn-success">Lihat</a>
											<a href="{{ route('admin.halaman.edit', $halaman->id) }}" class="btn btn-warning">Edit</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
    @endsection