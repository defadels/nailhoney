@extends('layout.admin_layout')

@section('title', 'Blog')


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
								<h4 class="mb-0">Edit Blog</h4>
							</div>
							<hr/>

							<form action="" method="post">

							<div class="form-group">
							<label for=""><h5>Judul</h5></label>
								<input class="form-control form-control-lg" type="text" />
							</div>

							
							<div class="form-group">
							<label for=""><h5>Abstrak</h5></label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>

							<div class="form-group">
							<label for=""><h5>Isi Blog</h5></label>
							<textarea id="mytextarea" name="mytextarea">Hello, World!</textarea>
							</div>


							
							<div class="form-group">
							<label for=""><h5>Penulis</h5></label>
								<input type="text" class="form-control">
							</div>

							<div class="form-group">
									<label for="formControlRange"><h5>Kategori</h5></label>
									<br>
									<input type="text" data-role="tagsinput" value="">
							</div>

							<div class="form-group">
								<label for=""><h5>Thumbnail</h5></label>
								<input type="file" class="form-control">
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