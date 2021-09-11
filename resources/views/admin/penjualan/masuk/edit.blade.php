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
									<li class="breadcrumb-item active" aria-current="page">Edit</li>
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
					{!! Form::model(['route' => ['admin.penjualan.masuk.update', $penjualan->id], 'method' => 'PUT']) !!}

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card radius-15">
								<div class="card-body">

										<div class="form-body">
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Diproses Oleh</label>
												<div class="col-sm-9">
													<input type="text" name="" id="" class="form-control">

												</div>
											</div>
											<div class="form-group row">
												<!-- <label for="" class="col-sm-3 col-form-label">Pelanggan</label> -->
												{!! Form::label('pelanggan_id', 'Nama Pelanggan', ['class'=> 'col-sm-3 col-form-label']) !!}
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->
												{!! Form::select('pelanggan_id', $daftar_pelanggan, old('pelanggan_id'), ['placeholder' => 'Cari nama pelanggan','class' => 'single-select']) !!}
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

												{!! Form::label('pembayaran_id', 'Metode Pembayaran', ['class'=> 'col-sm-3 col-form-label']) !!}
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->

													{!! Form::select('pembayaran_id', $daftar_pembayaran, old('pembayaran_id'), ['placeholder' => 'Pilih metode pembayaran...','class' => 'single-select']) !!}
												</div>
											</div>
											<div class="form-group row">
												<!-- <label for="" class="col-sm-3 col-form-label">Metode Pengiriman</label> -->

												{!! Form::label('pengiriman_id', 'Metode Pengiriman', ['class'=> 'col-sm-3 col-form-label']) !!}
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->
												
													{!! Form::select('pengiriman_id', $daftar_pengiriman, old('pengiriman_id'), ['placeholder' => 'Pilih metode pengiriman...','class' => 'single-select']) !!}
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Catatan Khusus</label>
												<div class="col-sm-9">
													<input type="text" name="" id="" class="form-control">

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
												<label for="" class="col-sm-2 col-form-label">Dari</label>
												<div class="col-sm-5">
													<input type="text" name="" id="" class="form-control">

												</div>
												<div class="col-sm-5">
													<input type="text" name="" id="" class="form-control">

												</div>
											</div>

											<div class="form-group row">
												<label for="" class="col-sm-2 col-form-label">Kepada</label>
												<div class="col-sm-5">
													<input type="text" name="" id="" class="form-control">

												</div>
												<div class="col-sm-5">
													<input type="text" name="" id="" class="form-control">

												</div>
											</div>

											<div class="form-group row">
												<label for="" class="col-sm-2 col-form-label">Alamat Tujuan</label>

												<div class="col-sm-10">
													<textarea class="form-control" rows="3" cols="3"></textarea>

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
													<input type="text" name="" id="" class="form-control">
												</div>
											</div>

											<div class="form-group row">
												<!-- <label for="" class="col-sm-3 col-form-label">Ongkos Kirim</label> -->
												{!! Form::label('ongkos_kirim', 'Ongkir', ['class' => 'col-sm-3 col-form-label']) !!}
												<div class="col-sm-9">
													{!! Form::number('ongkos_kirim', old('ongkos_kirim'), ['class' => 'form-control']) !!}
												</div>
											</div>

											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Grand Total</label>
												<div class="col-sm-9">
													<input type="number" value="0" disabled name="" id="" class="form-control">
												</div>
											</div>

											<div class="form-group row">
												{!! Form::label('total', 'Total Belanja', ['class' => 'col-sm-3 col-form-label']) !!}
												<div class="col-sm-9">
													{!! Form::number('total', old('total'),['class' => 'form-control']) !!}
												</div>
											</div>

											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label"></label>
												<div class="col-sm-9">
												<input type="submit" class="btn btn-md btn-primary" value="Simpan">
												<input type="reset" class="btn btn-md btn-danger" value="Batal">
												</div>
											</div>

										</div>
								</div>
							</div>
						</div>
					</div>
					{!! Form::close() !!}
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