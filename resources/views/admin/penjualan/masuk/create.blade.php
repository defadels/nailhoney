@extends('layout.admin_layout')

@section('title', 'Tambah Penjualan Masuk')

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
					{!! Form::open(['route' => 'admin.penjualan.masuk.store']) !!}

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card radius-15">
								<div class="card-body">

										<div class="form-body">
											
											<div class="form-group row">
												<!-- <label for="" class="col-sm-3 col-form-label">Pelanggan</label> -->
												{!! Form::label('pelanggan_id', 'Nama Pelanggan', ['class'=> 'col-sm-3 col-form-label']) !!}
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->
												{!! Form::select('pelanggan_id', $daftar_pelanggan, old('pelanggan_id'), ['placeholder' => 'Cari nama pelanggan','id' => 'cari-pelanggan']) !!}
												</div>
											</div>

											<div class="form-group row">
												<!-- <label for="" class="col-sm-3 col-form-label">Pelanggan</label> -->
												<!-- {!! Form::label('pelanggan_id', 'Nomor Handphone', ['class'=> 'col-sm-3 col-form-label']) !!} -->
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->
												<!-- {!! Form::text('pelanggan_id', old('pelanggan_id'), ['class' => 'form-control']) !!} -->
												</div>
											</div>

											<div class="form-group row">
												<!-- <label for="" class="col-sm-3 col-form-label">Pelanggan</label> -->
												<!-- {!! Form::label('pelanggan_id', 'Email Pelanggan', ['class'=> 'col-sm-3 col-form-label']) !!} -->
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->
												<!-- {!! Form::email('pelanggan_id', old('pelanggan_id'), ['class' => 'form-control']) !!} -->
												</div>
											</div>
										</div>

								</div>
							</div>
						</div>
			
						<div class="col-12 col-lg-6">
							<div class="card radius-15">
								<div class="card-body">

										<div class="form-body">
											<div class="form-group row">
												<!-- <label for="" class="col-sm-3 col-form-label">Metode Pembayaran</label> -->

												<!-- {!! Form::label('pembayaran_id', 'Metode Pembayaran', ['class'=> 'col-sm-3 col-form-label']) !!} -->
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->

													<!-- {!! Form::select('pembayaran_id', $daftar_pembayaran, old('pembayaran_id'), ['placeholder' => 'Pilih metode pembayaran...','class' => 'select2']) !!} -->
												</div>
											</div>
											<div class="form-group row">
												<!-- <label for="" class="col-sm-3 col-form-label">Metode Pengiriman</label> -->

												<!-- {!! Form::label('pengiriman_id', 'Metode Pengiriman', ['class'=> 'col-sm-3 col-form-label']) !!} -->
												<div class="col-sm-9">
													<!-- <input type="text" name="" id="" class="form-control"> -->
												
													<!-- {!! Form::select('pengiriman_id', $daftar_pengiriman, old('pengiriman_id'), ['placeholder' => 'Pilih metode pengiriman...','class' => 'select2']) !!} -->
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
							<a onclick="tambah_baris(produk)" class="text-right btn btn-icon btn-outline-warning btn-sm" href="javascript:void(0)"><i class="fadeIn animated bx bx-plus"></i></a>
							<hr>
							<div class="table-respnsive">
								<table class="table" id="tabel_pesanan">
									<thead class="thead-dark">
										<tr>
											<th scope="col" width="30%">Produk</th>
											<th scope="col" width="10%" class="text-center">Jumlah</th>
											<th scope="col" class="text-right">Harga Satuan</th>
											<th scope="col" class="text-right">Subtotal</th>
											<th width="1%"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
										<th scope="row" colspan="3">Total</th>
										<td id="total_belanja" class="text-right">0</td>
										</tr>
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
											<label for="" class="col-sm-2 col-form-label">Pilih Alamat</label>
												<div class="col-sm-10">
												
												<!-- {!! Form::select('alamat_id', $alamat, old('alamat_id'), ['placeholder' => 'Pilih alamat...','class' => 'select2','id' => 'daftar_alamat']) !!} -->
												<select name="label" id="label_alamat" class="form-control">
													<option value="">Pilih alamat...</option>
												</select>

												</div>

												<label for="" class="col-sm-2 col-form-label">Kepada</label>
												<div class="col-sm-5">
													<input type="text" name="nama_penerima" value="" id="tujuan_nama" class="form-control" placeholder="Nama penerima ...">

												</div>
												<div class="col-sm-5">
													<input type="text" name="nomor_hp_penerima" value="" id="tujuan_nomor_hp" class="form-control" placeholder="Nomor handphone penerima ...">

												</div>
											</div>

											<div class="form-group row">
												<label for="" class="col-sm-2 col-form-label">Alamat Tujuan</label>

												<div class="col-sm-10">
													<textarea class="form-control" name="alamat_penerima" rows="3" cols="3" id="tujuan_alamat"></textarea>

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
												<!-- <label for="" class="col-sm-3 col-form-label">Ongkos Kirim</label> -->
												{!! Form::label('ongkos_kirim', 'Ongkir', ['class' => 'col-sm-3 col-form-label']) !!}
												<div class="col-sm-9">
													{!! Form::number('ongkos_kirim', old('ongkos_kirim'), ['class' => 'form-control']) !!}
												</div>
											</div>

											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Grand Total</label>
												<div class="col-sm-9">
													<!-- <input type="number" value="0" disabled name="" id="" class="form-control"> -->
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
												<input type="submit" class="btn btn-md btn-primary" value="Pesan">
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

		var data_global = ""; 
		
		$('.select2').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
			
		});

		$('#cari-pelanggan').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
			
			ajax: {
			url: '{{route("admin.penjualan.masuk.daftar_pelanggan")}}',
			dataType: 'json',
			delay: 250,
			data: function (params) {
				return {
					cari: params.term,
					page: params.page || 1
				};
				},
			processResults: function (data) {
				return {
				results:  $.map(data.results, function (item) {
					return {
					text: item.nama +" ["+item.email+"]",
					id: item.id,
					}
				}),
          pagination: data.pagination
        };
      },
      cache: true
    },

    templateSelection: formatRepoSelection

		});

		function formatRepoSelection (repo) {

		return repo.text;
		}

		$("#cari-pelanggan").change(function(){
       		var id_pelanggan = $(this).val(); 
	   		var $el = $("#label_alamat");
			var $kepada = $('#tujuan_nama');
			var $alamat_tujuan = $('#tujuan_alamat');
			var $tujuan_nomor_hp = $('#tujuan_nomor_hp');

			$el.empty(); // remove old options
			$kepada.val('');
			$alamat_tujuan.empty();
			$tujuan_nomor_hp.val('');

       $.ajax({
          type: "GET",
          dataType: "json",
          url: '{{ route("admin.penjualan.masuk.daftar_alamat")}}?pelanggan_id='+id_pelanggan,
          success: function(msg){

			console.log(msg);

			data_global = msg;

			// if(msg.results){
			// 	var $id = $('#cari-pelanggan').val() - 1;
			// 	var $pertama = msg.results[$id];

			// 	console.log($pertama.result[0]);
				
				var status = ["ya"];
				var filteredArray = msg.result.filter(function(df){

				return status.indexOf(df.is_default) > -1;
				});

				filteredArray = filteredArray[0];

				console.log(filteredArray[0]);


				$kepada.val(filteredArray.nama_penerima);
				$alamat_tujuan.html(filteredArray.alamat_penerima);
				$tujuan_nomor_hp.val(filteredArray.nomor_hp_penerima);

			// }

				// $el.empty(); // remove old options
				$.each(msg.result, function(key, value) {
					$el.append($("<option></option>")
     				.attr("value", value.id).text(value.label));
					 console.log(value.id);
					 console.log(value.label);
				
				});                                                     
          }
       });
	   
	   
     });
	 
	 console.log(data_global);
	 
	

	 function get_alamat(id_alamat) {
		 var hasil = 0;
		 if(isNaN(id_alamat)){
			 return 0;
		 }
		 $.ajax({
			url: '{{route("admin.penjualan.masuk.daftar_alamat")}}?id='+id_alamat,
			success : function (msg) {
				hasil = msg;
			},
			async : false
		 });
		 return hasil;
	 }

	 $("#label_alamat").change(function() {
		 
		 var id = $('#label_alamat').val();

		 var filteredArray = msg.result.filter(function(df){

		return status.indexOf(df.is_default) > -1;
		});

		filteredArray = filteredArray[0];

		console.log(filteredArray[0]);

		 var alamat = get_alamat(id);

		 console.log(alamat);

		 if (alamat.is_default === "ya") {
			$('#tujuan_nama').val(alamat.result.nama_penerima);
			$('#tujuan_nomor_hp').val(alamat.result.nomor_hp_penerima);
			$('#alamat_tujuan').html(alamat.result.alamat_penerima);
		 } else {
			$('#tujuan_nama').val();
			$('#tujuan_nomor_hp').val("");
			$('#alamat_tujuan').html("");
		 }
	 });

// funciton cari produk
function cari(){


$("form").submit(function (event) {
		  $('.nominal').unmask();
  });


$('.nominal').mask("000.000.000.000.000", {reverse: true});


$(".touchspin").TouchSpin({
  buttondown_class: "btn btn-primary",
  buttonup_class: "btn btn-primary",
});

$('.cariproduk').select2({
  placeholder: 'Cari dan Pilih Produk...',
  ajax: {
	url: '',
	dataType: 'json',
	delay: 250,
	data: function (params) {
	  var selainx = $(".cariproduk").map(function(){return $(this).val();}).get().join(',');
		return {
		  selain: selainx,
		  cari: params.term,
		  page: params.page || 1
		};
	  },
	processResults: function (data) {
	  return {
		results:  $.map(data.results, function (item) {

		  return {
			text: item.nama,
			id: item.id
		  }
		}),
		pagination: data.pagination
	  };
	},
	cache: true
  }
});

	$( ".kuantitas,.cariproduk,.harga_konsumen,#ongkos_kirim,#biaya_tambahan,#biaya_packing,#diskon" ).change(function() {
	hitung();
	});
	$( ".kuantitas,.cariproduk,.harga_konsumen,#ongkos_kirim,#biaya_tambahan,#biaya_packing,#diskon" ).keyup(function() {
	hitung();
	});

}

// function tabel pesanan

	function hitung(){
		// var x = $(".cariproduk")
		//            .map(function(){return $(this).val();}).get().join(',');
		//  console.log(x);
			var total_belanja = 0;

		$('#tabel_pesanan > tbody  > tr').each(function(index) {
		var produk_id = $('.cariproduk').eq(index).val();
		var pelanggan_id = 1;
		var qty = $('.kuantitas').eq(index).val();
		var harga = get_harga(produk_id,pelanggan_id);
		$('.harga_satuan').eq(index).html(numeral(harga).format('0,0'));
		var sub_total = qty*harga;
		$('.sub_total').eq(index).html(numeral(sub_total).format('0,0'));

		if(!isNaN(sub_total)){
			total_belanja += sub_total;
		}

		});

		$('#total_belanja').html(numeral(total_belanja).format('0,0'));

		var ongkir = $('#ongkos_kirim').cleanVal();
		var biaya_tambahan = $('#biaya_tambahan').cleanVal();
		var biaya_packing = $('#biaya_packing').cleanVal();
		var diskon = $('#diskon').cleanVal();
		var grand_total =  parseInt(ongkir) + parseInt(biaya_tambahan)+ parseInt(biaya_packing) - parseInt(diskon) + parseInt(total_belanja);

		$('#grand_total').val(numeral(grand_total).format('0,0'));

	}

	var produk = {
      nama : "Minyak goreng",
      kuantitas : 1,
      harga_satuan : 0,
      sub_total : 0,
  };


  function hapus_baris(e){
		$(e).closest('tr').remove();
		hitung();
	}

	 function tambah_baris(produk){

		var baris = "<tr>"
				+"<td><select class='form-control cariproduk' name='produk_id[]'></select></td>"
				+"<td><div class='input-group input-group-md'><input type='number' name='kuantitas[]' min='1' class='form-control kuantitas touchspin' value='"+produk.kuantitas+"'/></div></td>"
				+"<td class='harga_satuan text-right'>"+produk.harga_satuan+"</td>"
				+"<td class='sub_total text-right'>"+produk.sub_total+"</td>"
				+"<td><a onclick='hapus_baris(this)' class='btn btn-icon btn-outline-warning btn-sm waves-effect waves-light' href='javascript:void(0)'><i class='fadeIn animated bx bx-trash-alt'></i></a></td>"

				+"</tr>";
		$('#tabel_pesanan > tbody > tr').eq(-1).before(baris);
		cari();
		hitung();
	}
	
	</script>
	@endsection