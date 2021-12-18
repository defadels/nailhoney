@extends('layout.editor_layout')

@section('title', 'Edit Testimoni')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Testimoni</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Edit Testimoni</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<div class="btn-group">
								<button class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal5">Hapus</button>
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Edit Testimoni</h4>
							</div>
							<hr/>

							{!! Form::model($testimoni, ['route' => ['editor.testimoni.update', $testimoni->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}

							<div class="form-group">
								<img src="{{ Storage::url($testimoni->foto) }}" alt="">
							</div>
                            <div class="form-group">
							{!! Form::label('foto', 'Foto') !!}

							{!! Form::file('foto', ['class' => 'form-control']) !!}
                            </div>

							<div class="form-group">
							{!! Form::label('nama_konsumen', 'Nama Konsumen') !!}


							{!! Form::text('nama_konsumen', old('nama_konsumen'), ['class' => 'form-control']) !!}
							</div>

							<div class="form-group">
							{!! Form::label('isi_testimoni', 'Isi Testimoni') !!}

							{!! Form::textarea('isi_testimoni', old('isi_testimoni'), ['class' => 'form-control']) !!}
							</div>
							<hr>

							<input type="submit" class="btn btn-md btn-primary" value="Simpan">

						</div>
						{!! Form::close() !!}
					</div>

					<!-- Modal -->
				<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-hidden="true">
					{!! Form::open(['url' => route('admin.testimoni.destroy',$testimoni->id), 'method' => 'DELETE']) !!}	
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