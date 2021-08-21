@extends('layout.admin_layout')

@section('title', 'Spanduk')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Spanduk</div>
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
						<a href="{{ route('admin.spanduk.create') }}" class="btn btn-light">Tambah</a>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Spanduk</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th>Foto</th>
											<th>Judul</th>
											<th>Link</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@foreach($daftar_spanduk as $spanduk)
										<tr>
											<th><img src="{{ Storage::url($spanduk->foto) }}" alt="" style="width:300px;"></th>
											<td>{{ $spanduk->judul }}</td>
											<td>{{ $spanduk->link }}</td>
											<td>
											<button class="btn btn-primary">
												{{ $spanduk->status }}
											</button>
											</td>
											<td>
											<a href="{{ route('admin.spanduk.edit', $spanduk->id) }}" class="btn btn-warning">Edit</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
    @endsection