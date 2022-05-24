@extends('layout.admin_layout')

@section('title', 'Blog')


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
								<h4 class="mb-0">Tambah Blog</h4>
							</div>
							<hr/>
							
							{!! Form::open(['route' => 'admin.blog.store','enctype' => 'multipart/form-data']) !!}
							
							<div class="form-group">
							{!! Form::label('foto"', 'Foto') !!}
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

							{{-- <div class="form-group">
							{!! Form::label('konten', 'Isi Blog') !!}
							{!! Form::textarea('konten', old('konten'), ['id' => 'summernote', 'rows' => '10']) !!}
							</div> --}}
							
							<div class="form-group">
							{!! Form::label('penulis', 'Penulis') !!}
							{!! Form::text('penulis', old('penulis'),['class' => 'form-control form-control']) !!}
							
							</div>

							<div class="form-group">
							{!! Form::label('kategori_id"', 'Kategori') !!}

							{!! Form::select('kategori_id', $daftar_kategori, old('kategori_id'), ['placeholder' => 'Pilih kategori...','class' => 'form-control']) !!}
      
                            </div>	

							<div class="form-group">
							{!! Form::label('status"', 'Status') !!}
							{!! Form::select('status', $daftar_status, old('status'), ['placeholder' => 'Pilih status...','class' => 'form-control']) !!}
                            </div>

							<hr>
							<input type="submit" class="btn btn-md btn-primary" value="Tambah"> ||
							<input type="reset" class="btn btn-md btn-danger" value="Reset">

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