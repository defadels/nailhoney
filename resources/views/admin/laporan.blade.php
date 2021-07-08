@extends('layout.admin_layout')

@section('title', 'Laporan')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Halaman Laporan</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Tabel Laporan</li>
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
									<div class="dropdown-divider"></div>	
                                    <a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div>
                     

						</div>

                         
					</div>

                    {!! Form::open() !!}

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            {!! Form::label('dari', 'Dari'); !!}

                            {!! Form::date('name', \Carbon\Carbon::now(), ['class'=>'form-control']); !!}
                            </div>
                            
                            <div class="col-md-6 mb-3">
                            {!! Form::label('sampai', 'Sampai'); !!}

                            {!! Form::date('name', \Carbon\Carbon::now(), ['class' => 'form-control']); !!}
                            </div>

                        </div>
                    {!! Form::close() !!}
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Laporan</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">Kategori</th>
											<th scope="col">Nama Produk</th>
											<th scope="col">Klik</th>
											<th scope="col">Terjual</th>
											<th scope="col">Omset</th>
											<th scope="col">Komisi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Madu</td>
											<td>Madu 1 kg</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
    @endsection