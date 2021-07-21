@extends('layout.admin_layout')

@section('title', 'Pelanggan')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Pelanggan</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Tabel Pelanggan</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
						<a class="btn btn-light" href="{{ route('admin.pelanggan.create') }}">Tambah</a>
						</div>
					</div>

					{!! Form::open(['route' => 'admin.pelanggan.index' , 'method' => 'GET']) !!}

						<div class="form-row">
							<div class="col-md-6 mb-3">

							{!! Form::text('keyword', $keyword, ['class'=>'form-control','placeholder' => 'Cari pelanggan ...']) !!}
							</div>
							

							<div class="col-md-6 mb-3">

							<input type="submit" value="Cari" class="btn btn-warning">
							</div>
						</div>	
					{!! Form::close() !!}	
					
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Pelanggan</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th>Registrasi</th>
											<th>Nama</th>
											<th>Nomor HP</th>
											<th>Email</th>
											<th>Terjual</th>
											<th>Saldo</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
									@foreach($daftar_pelanggan as $pelanggan)
										<tr>
											<th scope="row">
											{{ $pelanggan->created_at }}
											</th>
											<td>
											{{ $pelanggan->nama }}
											</td>
											<td>{{ $pelanggan->nomor_hp }}</td>
											<td>{{ $pelanggan->email }}</td>
											<td>200</td>
											<td>200.000</td>
											<td>
											<a class="btn btn-primary" href="">
												Lihat
											</a>

											<a class="btn btn-success" href="{{ route('admin.pelanggan.edit', $pelanggan->id) }}">
												Edit
											</a>
											
											<a class="btn btn-warning">
												Komisi
											</a>
											
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								
							</div>
						</div>
					</div>
    @endsection