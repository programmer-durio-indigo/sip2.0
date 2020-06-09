<!DOCTYPE html>
<html>
	<head>
		<title>Simply Information Plantation</title>
		<link rel="shortcut icon" href="asset/images/logo_sip_icon.png">
		<link rel="stylesheet" type="text/css" href="{{ url('/storage/plugin/bootstrap-4.3.1/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/storage/plugin/fontawesome-pro/css/all.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/storage/asset/font/roboto/roboto.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/storage/asset/css/custom.css') }}">
	</head>
	<body>
		<header>
			<div class="d-table w-100">
				<div class="d-table-cell text-left align-middle">
					<span class="d-inline-block">
						<img src="{{ url('/storage/asset/images/logo_sip_icon.png') }}" style="width: 35px">
					</span>
					<span class="d-inline-block pr-5">
						<h2 class="h5 text-white m-0">Simply Information Plantation</h2>
					</span>
					<span class="d-inline-block pr-2">
						<a href="javascript:;" onclick="toggleSidebar()" title="Buka/tutup sidebar">
							<i class="fal fa-align-left text-white h5  m-0"></i>
						</a>
					</span>
					<span class="d-inline-block">
						<form class="pencarian">
							<i class="fal fa-search text-white"></i>
							<input type="text" name="cari" placeholder="Kata kunci pencarian">
						</form>
					</span>
				</div>
				<div class="d-table-cell text-right align-middle">
					<span class="d-inline-block pr-2">
						<a href="javascript:;">
							<i class="fal fa-bell text-white h5 m-0"></i>
						</a>
					</span>
					<span class="d-inline-block">
						<a href="javascript:;" onclick="logout()" title="Logout">
							<i class="fal fa-sign-out text-white h5 m-0"></i>
						</a>
					</span>
				</div>
			</div>
		</header>
		<section>
			<aside>
				<div class="pengguna p-2" style="background: #293134">
					<div class="d-table">
						<div class="d-table-cell align-middle pr-2">
							<div class="bg-white rounded-circle border p-1" style="border-color:#30adf2;border-width: 3px !important">
								<img src="{{ url('/storage/asset/images/default-user.png') }}" class="rounded-circle" style="object-fit: cover" width="70px" height="70px" />
							</div>
						</div>
						<div class="d-table-cell align-middle text-white small">
							Selamat Datang,<br/>
							Egi Zilvananda
						</div>
					</div>
				</div>
				<nav class="pt-3">
					<ul>
						<li>
							<a href="#">
								<i class="fal fa-home fa-fw"></i>
								Dashboard
							</a>
						</li>
						<li class="has-submenu">
							<a href="javascript:;">
								<i class="fal fa-user fa-fw"></i>
								Personalia
							</a>
							<div class="submenu">
								<ul>
									<li>
										<a href="">
											Input Data
										</a>
									</li>
									<li class="has-submenu">
										<a href="javascript:;">
											Master Data
										</a>
										<div class="submenu">
											<ul>
												<li>
													<a href="">
														Golongan
													</a>
												</li>
												<li>
													<a href="">
														Jabatan
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</aside>
			<div class="isinya">
				<nav>
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=""><i class="fal fa-home"></i></a>
						</li>
						<li class="breadcrumb-item">
							<a href="">Personalia</a>
						</li>
						<li class="breadcrumb-item">
							<a href="">Input Data</a>
						</li>
						<li class="breadcrumb-item active">
							<a href="">Pegawai</a>
						</li>
					</ul>
				</nav>
				<div class="modul">
					<div class="text-center py-5 pb-5">
						@yield('content')
					</div>
				</div>
			</div>
		</section>
	</body>
    <script type="text/javascript" src="{{ url('/storage/asset/js/jquery-1.11.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/storage/asset/js/custom.js') }}"></script>
    @yield('js')
</html>