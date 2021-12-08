    
	@php 

	function rute($namarute){
		$rute = Route::currentRouteName();
		return (strpos($rute , $namarute) === 0) ? 'mm-active' : '';
	}

	@endphp
	
	<ul class="metismenu" id="menu">
            
				<li class="{{ rute('admin.dashboard') }}">
					<a href="{{ route('admin.dashboard') }}">
						<div class="parent-icon"><i class="bx bx-tachometer "></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				<li class="{{ rute('admin.produk') }}">
					<a href="{{ route('admin.produk.index') }}">
						<div class="parent-icon"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Produk</div>
					</a>
				</li>

				<li>
					<a href="javascript:void(0);" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-cart"></i>
						</div>
						<div class="menu-title">Penjualan</div>
					</a>
					<ul>
						<li class="{{ rute('admin.penjualan.masuk') }}"> <a href="{{ route('admin.penjualan.masuk.index') }}"><i class="bx bx-menu"></i>Masuk</a>
						</li>
						<li class="{{ rute('admin.penjualan.proses') }}"> <a href="{{ route('admin.penjualan.proses.index') }}"><i class="bx bx-border-bottom"></i>Diproses</a>
						</li>
						<li class="{{ rute('admin.penjualan.kirim') }}"> <a href="{{ route('admin.penjualan.kirim.index') }}"><i class="bx bx-user-circle"></i>Dikirim</a>
						</li>
						<li class="{{ rute('admin.penjualan.selesai') }}"> <a href="{{ route('admin.penjualan.selesai.index') }}"><i class="bx bx-user-circle"></i>Selesai</a>
						</li>
						<li class="{{ rute('admin.penjualan.batal') }}"> <a href="{{ route('admin.penjualan.batal.index') }}"><i class="bx bx-user-circle"></i>Batal</a>
						</li>
					</ul>
				</li>

				<li class="{{ rute('admin.pelanggan') }}">
					<a href="{{ route('admin.pelanggan.index') }}">
						<div class="parent-icon"><i class="bx bx-user"></i>
						</div>
						<div class="menu-title">Pelanggan1</div>
					</a>
				</li>

				<li class="{{ rute('admin.komisi') }}">
					<a href="{{ route('admin.komisi.index') }}">
						<div class="parent-icon"><i class="bx bx-money"></i>
						</div>
						<div class="menu-title">Pencairan Komisi</div>
					</a>
				</li>

				<li class="{{ rute('admin.blog') }}">
					<a href="{{ route('admin.blog.index') }}">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Blog</div>
					</a>
				</li>

				<li class="{{ rute('admin.halaman') }}">
					<a href="{{ route('admin.halaman.index') }}">
						<div class="parent-icon"><i class="bx bx-file"></i>
						</div>
						<div class="menu-title">Halaman</div>
					</a>
				</li>

				<li class="{{ rute('admin.spanduk') }}">
					<a href="{{ route('admin.spanduk.index') }}">
						<div class="parent-icon"><i class="bx bx-map-alt"></i></div>
						<div class="menu-title">Spanduk</div>
					</a>
				</li>

				<li class="{{ rute('admin.testimoni') }}">
					<a href="{{ route('admin.testimoni.index') }}">
						<div class="parent-icon"><i class="bx bx-conversation"></i></div>
						<div class="menu-title">Testimoni</div>
					</a>
				</li>

				<li class="{{ rute('admin.laporan') }}">
					<a href="{{ route('admin.laporan.index') }}">
						<div class="parent-icon"><i class="bx bx-detail"></i></div>
						<div class="menu-title">Laporan</div>
					</a>
				</li>

				<li>
					<a href="javascript:void(0);" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-wrench"></i></div>
						<div class="menu-title">Pengaturan</div>
					</a>
					<ul>
						<li class="{{ rute('admin.pengaturan.pembayaran') }}"> <a href="{{ route('admin.pengaturan.pembayaran.index') }}"><i class="bx bx-menu"></i>Pembayaran</a>
						</li>
						<li class="{{ rute('admin.pengaturan.pengiriman') }}"> <a href="{{ route('admin.pengaturan.pengiriman.index') }}"><i class="bx bx-menu"></i>Pengiriman</a>
						</li>
						<li class="{{ rute('admin.pengaturan.menu') }}"> <a href="{{ route('admin.pengaturan.menu.index') }}"><i class="bx bx-menu"></i>Menu</a>
						</li>
						<li class="{{ rute('admin.pengaturan.footer') }}"> <a href="{{ route('admin.pengaturan.footer') }}"><i class="bx bx-menu"></i>Footer</a>
						</li>
						<li class="{{ rute('admin.pengaturan.user') }}"> <a href="{{ route('admin.pengaturan.user.index') }}"><i class="bx bx-menu"></i>User</a>
						</li>
					</ul>
				</li>

				
			</ul>