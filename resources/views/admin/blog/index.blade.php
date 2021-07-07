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
						<a class="btn btn-light" href="{{ route('admin.blog.create') }}">Tambah</a>
						<a class="btn btn-light" href="{{ route('admin.blog.kategori.index') }}">Kategori</a>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Blog</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">Tanggal</th>
											<th scope="col">Judul</th>
											<th scope="col">Kategori</th>
											<th scope="col">Penulis</th>
											<th scope="col">Publish</th>
											<th scope="col">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@foreach($daftar_blog as $blog)
										<tr>
											<th scope="row">{{ $blog->created_at->format('d F y') }}</th>
											<td>{{ $blog->judul }}</td>
											<td>{{ $blog->kategori }}</td>
											<td>{{ $blog->penulis }}</td>
											<td>
											<button type="button" class="btn btn-light m-1">
												<i class="bx bx-cloud-upload mr-2">
												</i>
												{{ $blog->status }}
											</button>
											</td>

											<td>
											<a class="btn btn-success" href="{{ route('admin.blog.edit',$blog->id) }}">
												Edit
											</a>
											
											<button class="btn btn-danger">
												Hapus
											</button>
											
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
								{{ $daftar_blog->links() }}
							</div>
						</div>
					</div>
    @endsection