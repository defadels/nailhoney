@extends('layout.admin_layout')

@section('title', 'Pengaturan User')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Pengaturan User</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Pengaturan User</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<a href="{{ route('admin.pengaturan.user.create') }}" class="btn btn-primary">Tambah</a>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Pengaturan User</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
									
										<tr>
											<th scope="col">Nama</th>
											<th scope="col">Email</th>
											<th scope="col">Hak Akses</th>
											<th scope="col">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@foreach($daftar_user as $user)
										<tr>
											<th scope="row">{{ $user->nama }}</th>
											<td>{{ $user->email }}</td>
											<td>
											<button class="btn btn-primary">
											{{ $user->hak_akses }}
											</button>
											</td>
											<td>
											<a href="{{ route('admin.pengaturan.user.edit',$user->id) }}" class="btn btn-success">Edit</a>
											</td>
										</tr>
									@endforeach
									
									</tbody>
								</table>
								{{ $daftar_user->links() }}
							</div>
						</div>
					</div>
    @endsection