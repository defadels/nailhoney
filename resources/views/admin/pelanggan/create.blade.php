@extends('layout.admin_layout')

@section('title', 'Tambah Pelanggan')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Pelanggan</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Tambah Pelanggan</li>
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
								<h4 class="mb-0">Tambah User</h4>
							</div>
							<hr/>
							
							{!! Form::open(['route' => 'admin.pelanggan.store']) !!}
							
							<div class="form-group">
							{!! Form::label('nama', 'Nama') !!}

							{!! Form::text('nama', old('nama'),['class' => 'form-control']) !!}
							</div>

							
							<div class="form-group">
							{!! Form::label('email', 'Email') !!}

							{!! Form::email('email', old('email'), ['class' => 'form-control']) !!}

							</div>
							
                            <div class="form-group">
							{!! Form::label('password', 'Password') !!}


							{!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
                            
                            <div class="form-group">
							{!! Form::label('nohp', 'Nomor Handphone') !!}


							{!! Form::text('nohp', old('nohp'),['class' => 'form-control']) !!}
							</div>

                            <!-- <div class="form-group">
                            <label for="hak_akses"><h5>Hak Akses</h5></label>
                                <select name="hak_akses" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="editor">Editor</option>
                                    <option value="user">User</option>
                                </select>
                            </div> -->

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