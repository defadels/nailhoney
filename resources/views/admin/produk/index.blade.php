@extends('layout.admin_layout')

@section('title', 'Produk')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Produk</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Produk</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
						<a class="btn btn-light" href="{{ route('admin.produk.create') }}">Tambah</a>
						<a class="btn btn-light" href="{{ route('admin.produk.kategori.index') }}">Kategori</a>
						</div>
					</div>

					{!! Form::open(['route' => 'admin.produk.index' , 'method' => 'GET']) !!}

						<div class="form-row">
							<div class="col-md-6 mb-3">

							{!! Form::text('keyword', $keyword, ['class'=>'form-control','placeholder' => 'Cari produk ...']) !!}
							</div>
							
							<div class="col-md-4 mb-3">

							{!! Form::select('kategori_id', $daftar_kategori, $kategori_id, ['class' => 'form-control', 'placeholder' => 'Semua kategori']) !!}
							</div>

							<div class="col-md-2 mb-3">

							<input type="submit" value="Cari" class="btn btn-warning">
							</div>
						</div>	
					{!! Form::close() !!}	
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Produk</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">Kategori</th>
											<th scope="col">Nama Produk</th>
											<th scope="col">Harga</th>	
											<th scope="col">Komisi</th>	
											<th scope="col">Satuan</th>	
											<th scope="col">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@foreach($daftar_produk as $produk)
										<tr>
											<td>
											{{ $produk->kategori->nama }}
											</td>
											<td>{{ $produk->nama }}</td>
											<td>{{ $produk->harga }}</td>
											<td>{{ $produk->komisi }}</td>
											<td>{{ $produk->satuan }}</td>
											<td>
											<a href="{{ route('admin.produk.edit', $produk->id) }}" class="btn btn-primary">Edit</a>
											<a href="" class="btn btn-secondary">Foto</a>
											</td>
											
										</tr>
									@endforeach
									</tbody>
								</table>
								{{ $daftar_produk->links() }}
							</div>
						</div>
					</div>
    @endsection