@extends('layout.admin_layout')

@section('title', 'Edit User')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">User</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">User</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tambah User</h4>
							</div>
							<hr/>
							{!! Form::open(['route' => 'admin.pengaturan.user.store']) !!}

							<div class="form-group">
							{!! Form::label('nama', 'Nama') !!}
							
							{!! Form::text('nama', old('nama'), ['class' => 'form-control']) !!}
							
							</div>

							
							<div class="form-group">
							{!! Form::label('email', 'Email') !!}
							
							{!! Form::email('email', old('email'), ['class' => 'form-control'] ) !!}
							
							</div>
							
                            <div class="form-group">
							{!! Form::label('password', 'Password') !!}
							
							{!! Form::password('password', ['class' => 'form-control'] ) !!}
							
							</div>

                            <div class="form-group">
							{!! Form::label('hak_akses', 'Hak Akses') !!}
                            
							{!! Form::select('hak_akses', $daftar_hak_akses, old('hak_akses'), ['placeholder' => 'Pilih hak akses','class' => 'form-control']) !!}
                                
                            </div>

							<hr>
							<input type="submit" class="btn btn-md btn-primary" value="Simpan">

						</div>
						</form>
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