@extends('layout.admin_layout')

@section('title', 'Tambah Produk')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Produk</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
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
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tambah Produk</h4>
							</div>
							<hr/>

							{!! Form::open(['route' => 'admin.produk.store']) !!}

                            <div class="form-group">
							{!! Form::label('foto_produk', 'Foto Produk') !!}	

							{!! Form::file('foto_produk', ['class' => 'form-control']) !!}
                            
                            </div>

							<div class="form-group">
							{!! Form::label('nama_produk', 'Nama Produk') !!}	

							{!! Form::text('nama_produk', old('nama_produk'),['class' => 'form-control']) !!}
							</div>
							
							<div class="form-group">
							{!! Form::label('kategori_id', 'Kategori Produk') !!}	

							{!! Form::select('kategori_id', $daftar_kategori, old('kategori_id'), ['placeholder' => 'Pilih kategori produk', 'class' => 'form-control']) !!}
							</div>

							<div class="form-group">
							{!! Form::label('deskripsi_produk', 'Deskripsi Produk') !!}	

							{!! Form::text('deskripsi_produk', old('deskripsi_produk'),['class' => 'form-control']) !!}
							</div>

							<hr>
							<input type="submit" class="btn btn-md btn-primary" value="Simpan">

						</div>
						{!! Form::close() !!}
					</div>
    @endsection

	@section('page_script')
	<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
	<script src="{{asset('/assets-admin/plugins/input-tags/js/tagsinput.js') }}"></script>

	<script>
		tinymce.init({
		  selector: '#mytextarea'
		});
	</script>
	@endsection