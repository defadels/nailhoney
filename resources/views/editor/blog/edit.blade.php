@extends('layout.editor_layout')

@section('title', 'Edit Blog')

@section('page_style')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

@endsection

@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Blog</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Blog</li>
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
								<h4 class="mb-0">Edit Blog</h4>
							</div>
							<hr/>
							
							{!! Form::model($blog, ['route' => ['editor.blog.update', $blog->id],'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
							
							<div class="form-group">
								<img src="{{ Storage::url($blog->foto) }}" alt="">
							</div>

							<div class="form-group">
							{!! Form::label('foto', 'Foto') !!}
							{!! Form::file('foto', ['class' => 'form-control']) !!}
							</div>	

							<div class="form-group">
							{!! Form::label('judul', 'Judul') !!}
							{!! Form::text('judul', old('judul'),['class' => 'form-control']) !!}
							</div>

							
							<div class="form-group">
							{!! Form::label('abstrak', 'Abstrak') !!}
							{!! Form::textarea('abstrak', old('abstrak'), ['class' => 'form-control', 'rows' => '3']) !!}
							
							</div>

							<div class="form-group">
							{!! Form::label('konten', 'Isi Blog') !!}
							{!! Form::textarea('konten', old('konten'), ['id' => 'summernote', 'rows' => '10']) !!}
							</div>


							
							<div class="form-group">
							{!! Form::label('penulis', 'Penulis') !!}
							{!! Form::text('penulis', old('penulis'),['class' => 'form-control form-control']) !!}
							
							</div>

							<div class="form-group">
							{!! Form::label('kategori_id', 'Kategori') !!}

							{!! Form::select('kategori_id', $daftar_kategori, old('kategori_id'), ['placeholder' => 'Pick a size...','class' => 'form-control']) !!}
      
                            </div>

							<div class="form-group">
							{!! Form::label('status', 'Status') !!}
							{!! Form::select('status', $daftar_status, old('status'), ['placeholder' => 'Pick a size...','class' => 'form-control']) !!}
                            </div>

							<hr>
							<input type="submit" class="btn btn-md btn-primary" value="Simpan">

						</div>
						{!! Form::close() !!}
					</div>

					<!-- Modal -->
				<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-hidden="true">
					{!! Form::open(['url' => route('admin.blog.destroy',$blog->id), 'method' => 'DELETE']) !!}	
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
	<script src="{{asset('/assets-admin/plugins/input-tags/js/tagsinput.js') }}"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

	<script>
      $('#summernote').summernote({
        placeholder: 'Isi blog',
        tabsize: 2,
        height: 100
      });
    </script>
	@endsection