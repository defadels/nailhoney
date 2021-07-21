@extends('layout.admin_layout')

@section('title', 'Edit Pelanggan')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Pelanggan</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Edit Pelanggan</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
						<button class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal5">Hapus</button>
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
							
							{!! Form::model($pelanggan, ['route' => ['admin.pelanggan.update', $pelanggan->id], 'method' => 'PATCH']) !!}
							
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


							{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ketika jika ingin diubah!']) !!}
							</div>
                            
                            <div class="form-group">
							{!! Form::label('nomor_hp', 'Nomor Handphone') !!}


							{!! Form::text('nomor_hp', old('nomor_hp'), ['class' => 'form-control']) !!}
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
						{!! Form::close() !!}
						</div>
			
					</div>

					<!-- Modal -->
				<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-hidden="true">
					{!! Form::open(['url' => route('admin.pelanggan.destroy',$pelanggan->id), 'method' => 'DELETE']) !!}	
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

	@endsection