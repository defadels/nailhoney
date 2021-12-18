@extends('layout.editor_layout')

@section('title', 'Testimoni')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Testimoni</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Daftar Testimoni</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
						<a class="btn btn-light" href="{{ route('editor.testimoni.create') }}">Tambah</a>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Testimoni</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">Foto</th>
											<th scope="col">Nama Tokoh</th>
											<th scope="col">Isi Pesan</th>
											<th scope="col">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@foreach($daftar_testimoni as $testimoni)
										<tr>
											<td><img src="{{ Storage::url($testimoni->foto) }}" alt="" style="width:100px"></td>
											<td>{{ $testimoni->nama_konsumen }}</td>
											<td>{{ $testimoni->isi_testimoni }}</td>
											<td>
											<a href="{{ route('admin.testimoni.edit',$testimoni->id) }}" class="btn btn-primary">Edit</a>
											</td>
										</tr>
									@endforeach	
									</tbody>
								</table>
							</div>
						</div>
					</div>
    @endsection