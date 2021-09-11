@extends('layout.admin_layout')

@section('title', 'Penjualan Masuk')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Penjualan Masuk</div>
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
							<a href="{{ route('admin.penjualan.masuk.create') }}" class="btn btn-outline-primary">Tambah</a>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Penjualan Masuk</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th>Tanggal</th>
											<th>Nomor Transaksi</th>
											<th>Total Belanja</th>
											<th>Ongkir</th>
											<th>Pelanggan</th>
											<th>Kota</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
									@foreach($daftar_penjualan as $penjualan)
										<tr>
											<td>{{ $penjualan->created_at }}</td>
											<td>{{ $penjualan->no_transaksi }}</td>
											<td>{{ $penjualan->total }}</td>
											<td>{{ $penjualan->ongkos_kirim }}</td>
											<td>{{ $penjualan->pelanggan->nama }}</td>
											<td>Medan</td>
											<td>	
												<a href="{{ route('admin.penjualan.masuk.edit', $penjualan->id) }}" class="btn btn-outline-warning">Lihat</a>	
												<button class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal5" >Tolak</button>	
												<a href="{{ route('admin.penjualan.masuk.konfirmasi', $penjualan->id) }}" class="btn btn-outline-success">Proses</a>	
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
								{{ $daftar_penjualan->links() }}
							</div>
						</div>
					</div>

					<!-- Modal -->
				<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-hidden="true">
					{!! Form::open(['url' => route('admin.penjualan.masuk.destroy',$penjualan->id), 'method' => 'DELETE']) !!}	
							<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Anda yakin ingin menolak orderan ini?</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body"></div>
										<div class="modal-footer">
										<button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
										<input type="submit" class="btn btn-md btn-danger" value="Hapus">
										
										</div>
									</div>
								</div>
						{!! Form::close() !!}
							</div>
    @endsection