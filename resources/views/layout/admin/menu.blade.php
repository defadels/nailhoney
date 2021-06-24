    
	@php 

	function rute($namarute){
		$rute = Route::currentRouteName();
		return (strpos($rute , $namarute) === 0) ? 'mm-active' : '';
	}

	@endphp
	
	<ul class="metismenu" id="menu">
            
				<li>
					<a href="{{ route('admin.dashboard') }}">
						<div class="parent-icon"><i class="bx bx-tachometer "></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="{{ route('admin.blog') }}">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Blog</div>
					</a>
				</li>
				<li>
					<a href="{{ route('admin.spanduk') }}">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Spanduk</div>
					</a>
				</li>
				<li>
					<a href="{{ route('admin.testimoni') }}">
						<div class="parent-icon"><i class="bx bx-conversation"></i>
						</div>
						<div class="menu-title">Testimoni</div>
					</a>
				</li>
				<li>
					<a href="{{ route('admin.produk') }}">
						<div class="parent-icon"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Produk</div>
					</a>
				</li>
				<li>
					<a href="{{ route('admin.halaman') }}">
						<div class="parent-icon"><i class="bx bx-file"></i>
						</div>
						<div class="menu-title">Halaman</div>
					</a>
				</li>


				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-wrench"></i>
						</div>
						<div class="menu-title">Pengaturan</div>
					</a>
					<ul>
						<li class="{{ rute('admin.pengaturan.menu') }}"> <a href="{{ route('admin.pengaturan.menu') }}"><i class="bx bx-menu"></i>Menu</a>
						</li>
						<li class="{{ rute('admin.pengaturan.footer') }}"> <a href="{{ route('admin.pengaturan.footer') }}"><i class="bx bx-border-bottom"></i>Footer</a>
						</li>
						<li class="{{ rute('admin.pengaturan.user') }}"> <a href="{{ route('admin.pengaturan.user') }}"><i class="bx bx-user-circle"></i>User</a>
						</li>
					</ul>
				</li>

				
			</ul>