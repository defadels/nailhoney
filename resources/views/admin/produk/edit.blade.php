@extends('layout.admin_layout')

@section('title', 'Edit Produk')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Produk</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<button class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal5">Hapus</button>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Edit Produk</h4>
							</div>
							<hr/>

							{!! Form::model($produk, ['route' => ['admin.produk.update', $produk->id], 'method' => 'PUT']) !!}

                            <!-- <div class="form-group">
							{!! Form::label('foto_produk', 'Foto Produk') !!}	

							{!! Form::file('foto_produk', ['class' => 'form-control']) !!} -->
                            
                            <!-- </div> -->

							<div class="form-group">
							{!! Form::label('nama', 'Nama Produk') !!}	

							{!! Form::text('nama', old('nama'),['class' => 'form-control']) !!}
							</div>
							
							<div class="form-group">
							{!! Form::label('kategori_id', 'Kategori Produk') !!}	

							{!! Form::select('kategori_id', $daftar_kategori, old('kategori_id'), ['placeholder' => 'Pilih kategori produk', 'class' => 'form-control']) !!}
							</div>

							<div class="form-group">
							{!! Form::label('konten', 'Konten Produk') !!}	

							{!! Form::text('konten', old('konten'),['class' => 'form-control']) !!}
							</div>
							
							<div class="form-group">
							{!! Form::label('slug', 'Slug Produk') !!}	

							{!! Form::text('slug', old('slug'),['class' => 'form-control']) !!}
							</div>
							
							<div class="form-group">
							{!! Form::label('harga', 'Harga Produk') !!}	

							{!! Form::number('harga', old('harga'),['class' => 'form-control']) !!}
							</div>
							
							<div class="form-group">
							{!! Form::label('komisi', 'Komisi Produk') !!}	

							{!! Form::number('komisi', old('komisi'),['class' => 'form-control']) !!}
							</div>
							
							<div class="form-group">
							{!! Form::label('satuan', 'Satuan Produk') !!}	

							{!! Form::text('satuan', old('satuan'),['class' => 'form-control']) !!}
							</div>
							
							<div class="form-group">
							{!! Form::label('keyword', 'Keyword') !!}	

							{!! Form::text('keyword', old('keyword'),['class' => 'form-control']) !!}
							</div>
							
							<div class="form-group">
							{!! Form::label('deskripsi', 'Deskripsi Produk') !!}	

							{!! Form::text('deskripsi', old('deskripsi'),['class' => 'form-control']) !!}
							</div>

							<hr>
							<input type="submit" class="btn btn-md btn-primary" value="Simpan">

						</div>
						{!! Form::close() !!}
					</div>

					
					<!-- Modal -->
				<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-hidden="true">
					{!! Form::open(['url' => route('admin.produk.destroy',$produk->id), 'method' => 'DELETE']) !!}	
							<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Anda yakin ingin hapus data?</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">Penghapusan data akan mengakibatkan kejadian yang fatal
											pada data Anda. Yakin untk menghapus?</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
										<input type="submit" class="btn btn-md btn-danger" value="Hapus">
										
										</div>
									</div>
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