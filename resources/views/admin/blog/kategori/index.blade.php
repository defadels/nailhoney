@extends('layout.admin_layout')

@section('title', 'Kategori')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Kategori Blog</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Kategori</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
						<a class="btn btn-light" href="{{ route('admin.blog.kategori.create') }}">Tambah</a>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Kategori Blog</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">Tanggal</th>
											<th scope="col">Nama Kategori</th>
											<th scope="col">Keterangan</th>
											<th scope="col">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@foreach($daftar_kategori as $kategori)
										<tr>
											<th scope="row">{{ $kategori->created_at->format('d F y') }}</th>
											<td>{{ $kategori->nama }}</td>
											<td>{{ $kategori->keterangan}}</td>
											<td>
											<a class="btn btn-success" href="{{ route('admin.blog.kategori.edit', $kategori->id) }}">
												Edit
											</a>
											
											<button class="btn btn-danger">
												Hapus
											</button>
											
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
								{{ $daftar_kategori->links() }}
							</div>
						</div>
					</div>
    @endsection