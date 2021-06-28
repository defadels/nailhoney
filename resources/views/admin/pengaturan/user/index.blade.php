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
										<tr>
											<th scope="row">Fadhil</th>
											<td>fadhil.adhaa26@gmail.com</td>
											<td>
											<button class="btn btn-primary">
											Admin
											</button>
											</td>
											<td>
											<a href="{{ route('admin.pengaturan.user.edit') }}" class="btn btn-success">Edit</a>
											<a href="" class="btn btn-danger">Hapus</a>
											</td>
										</tr>
										<tr>
											<th scope="row">Zaid</th>
											<td>zaidabd96@gmail.com</td>
											<td>
											<button class="btn btn-primary">
											Admin
											</button>
											</td>
											<td>
											<a href="{{ route('admin.pengaturan.user.edit') }}" class="btn btn-success">Edit</a>
											<a href="" class="btn btn-danger">Hapus</a>
											</td>
										</tr>
									
									</tbody>
								</table>
							</div>
						</div>
					</div>
    @endsection