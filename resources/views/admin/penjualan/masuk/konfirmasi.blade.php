@extends('layout.admin_layout')

@section('title', 'Edit Penjualan Masuk')

@section('page_style')
<link href="{{asset('/assets-admin/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('/assets-admin/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
@endsection

@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Penjualan Masuk</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Tambah Penjualan Masuk</li>
									<li class="breadcrumb-item active" aria-current="page">Konfirmasi</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-light">Settings</button>
								<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
					<!-- {!! Form::model(['route' => ['admin.penjualan.masuk.update', $penjualan->id], 'method' => 'PUT']) !!} -->

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card radius-15">
								<div class="card-body">

										<div class="form-body">
											<div class="form-group row">
												<p class="col-sm-3">Diproses Oleh</p>
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->

												</div>
											</div>
											<div class="form-group row">
												<p class="col-sm-3">Nama Pelanggan</p>
												<div class="col-sm-9">
												<p>{{ $penjualan->pelanggan->nama}}</p>
												</div>
											</div>
										</div>
										<br />
										<br />
										<br />
										<br />
								</div>
							</div>
						</div>
			
						<div class="col-12 col-lg-6">
							<div class="card radius-15">
								<div class="card-body">

										<div class="form-body">
											<div class="form-group row">
												<!-- <label for="" class="col-sm-3 col-form-label">Metode Pembayaran</label> -->

												<p class="col-sm-3">Metode Pembayaran</p>
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->

													<p>{{ $penjualan->pembayaran->nama}}</p>
												</div>
											</div>
											<div class="form-group row">
												<!-- <label for="" class="col-sm-3 col-form-label">Metode Pengiriman</label> -->

												<p class="col-sm-3">Metode Pengiriman</p>
												<div class="col-sm-9">
											
													<p>{{ $penjualan->pengiriman->nama }}</p>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Catatan Khusus</label>
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->

												</div>
											</div>
										</div>
								</div>
							</div>
						</div>

					</div>

					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Barang yang Dipesan</h4>
							</div>
							<hr>
							<div class="table-respnsive">
								<table class="table">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Produk</th>
											<th scope="col">Jumlah</th>
											<th scope="col">Harga Satuan</th>
											<th scope="col">Subtotal</th>
										</tr>
									</thead>
									<tbody>
										<th scope="row" colspan="3">Total</th>
										<td>0</td>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="row">

					<div class="col-12 col-lg-6">
							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">Alamat Pengiriman</h4>
									</div>
									<hr/>
										<div class="form-body">

											<div class="form-group row">
												<p class="col-sm-2">Dari</p>
												<div class="col-sm-5">
													<!-- <input type="text" name="" id="" class="form-control"> -->

												</div>
												<div class="col-sm-5">
													<!-- <input type="text" name="" id="" class="form-control"> -->

												</div>
											</div>

											<div class="form-group row">
												<p class="col-sm-2">Kepada</p>
												<div class="col-sm-5">
													<!-- <input type="text" name="" id="" class="form-control"> -->

												</div>
												<div class="col-sm-5">
													<!-- <input type="text" name="" id="" class="form-control"> -->

												</div>
											</div>

											<div class="form-group row">
												<p class="col-sm-2">Alamat</p>

												<div class="col-sm-10">
													<!-- <textarea class="form-control" rows="3" cols="3"></textarea> -->

												</div>
											</div>

										</div>
								</div>
							</div>
						</div>
			
						<div class="col-12 col-lg-6">
							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
											<h4 class="mb-0">Ringkasan</h4>
									</div>
									<hr/>
										<div class="form-body">
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Biaya Tambahan</label>
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->
												</div>
											</div>

											<div class="form-group row">
													<p class="col-sm-3">Ongkir</p>											
												<div class="col-sm-9">
													<p>{{ $penjualan->ongkos_kirim }}</p>
												</div>
											</div>

											<div class="form-group row">
												<p class="col-sm-3">Grand Total</p>
												<div class="col-sm-9">
													
												</div>
											</div>

											<div class="form-group row">
												<p class="col-sm-3">Total Belanja</p>
												<div class="col-sm-9">
												<p>{{ $penjualan->total }}</p>
												</div>
											</div>

											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label"></label>
												<div class="col-sm-9">
												<button class="btn btn-md btn-outline-success" data-toggle="modal" data-target="#exampleModal5">Proses</button>
												<input type="reset" class="btn btn-md btn-outline-danger" value="Batalkan">
												<input type="reset" class="btn btn-md btn-outline-primary" value="Tunda">
												<input type="reset" class="btn btn-md btn-outline-warning" value="Batal">
												</div>
											</div>

										</div>
								</div>
							</div>
						</div>
					</div>
					<!-- {!! Form::close() !!} -->

					<!-- Modal -->
				<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-hidden="true">
					{!! Form::open(['url' => route('admin.penjualan.masuk.proses',$penjualan->id)]) !!}	
							<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Anda yakin ingin menolak orderan ini?</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											Orderan ini akan menuju halaman proses.
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
										<input type="submit" class="btn btn-md btn-primary" value="Proses">
										
										</div>
									</div>
								</div>
						{!! Form::close() !!}
							</div>
    @endsection

	@section('page_script')
	<script src="{{asset('/assets-admin/plugins/select2/js/select2.min.js')}}"></script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
	@endsection