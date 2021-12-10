@extends('layout.admin_layout')

@section('title', 'Foto Produk')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Produk</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Foto Produk </li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
						 <a class="btn btn-light" href="{{ route('admin.produk.foto.create',$produk->id) }}">Tambah</a>
						<!--<a class="btn btn-light" href="{{ route('admin.produk.kategori.index') }}">Kategori</a> -->
						</div>
					</div>

					

						<div class="form-row">
							<div class="col-md-6 mb-3">

							
							</div>
							
							<div class="col-md-4 mb-3">

							
							</div>

							<div class="col-md-2 mb-3">

							<!-- <input type="submit" value="Cari" class="btn btn-warning"> -->
							</div>
						</div>	
					
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Foto Produk</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Foto</th>
											<th scope="col">Keterangan</th>	
                                            <th scope="col">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 0; ?>
									@foreach($foto_produk as $foto)
									<?php $no++; ?>
										<tr>
											<td>
											{{ $no }}
											</td>
											<td>
											<img src="{{ Storage::url($foto->foto) }}" style="width:250px;" alt="">
											</td>
											<td>{{ $foto->keterangan }}</td>
											<td>
											<a href="{{route('admin.produk.foto.edit', [$foto->produk_id, $foto->id])}}" class="btn btn-primary">Edit</a>
											</td>
											
										</tr>
                                    @endforeach
									</tbody>
								</table>
							{{ $foto_produk->links() }}
							</div>
						</div>
					</div>
    @endsection