@extends('layout.admin_layout')

@section('title', 'Edit Halaman')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Halaman</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Edit Halaman</li>
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
								<h4 class="mb-0">Edit Halaman</h4>
							</div>
							<hr/>
							
						{!! Form::model($spanduk, ['route' => ['admin.halaman.update', $spanduk->id], 'method' => 'PUT']) !!}
						
						<!-- <div class="form-group">
						{!! Form::label('foto', 'Foto') !!}


						{!! Form::file('foto', old('foto'),['class' => 'form-control']) !!}
						</div> -->

						
						<div class="form-group">
						{!! Form::label('judul', 'Judul') !!}
						
						{!! Form::text('judul', old('judul'),['class' => 'form-control']) !!}
						</div>
						
						
						<div class="form-group">
						{!! Form::label('link', 'Link') !!}

						
						{!! Form::text('link', old('link'),['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
						{!! Form::label('status', 'Status') !!}
						
						{!! Form::select('status', $daftar_status, old('status'), ['placeholder' => 'Pilih status','class' => 'form-control']) !!}
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

	@endsection