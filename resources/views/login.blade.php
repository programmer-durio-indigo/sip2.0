<!DOCTYPE html>
<html>
	<head>
		<title>Simply Information Plantation</title>
		<link rel="shortcut icon" href="{{ url('/storage/asset/images/logo_sip_icon.png') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/storage/plugin/bootstrap-4.3.1/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/storage/plugin/fontawesome-pro/css/all.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/storage/asset/font/roboto/roboto.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/storage/asset/css/custom-login.css') }}">
		<script type="text/javascript" src="{{ url('/storage/asset/js/jquery-1.11.1.min.js') }}"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
			function formDaftar(){
				//$('#login').addClass('hide');
				$('#daftar').addClass('aktif');
			}
			document.addEventListener("keydown", function(event) {
			  if(event.which==27){
			 	$('#daftar').removeClass('aktif'); 	
			  }
			})
		</script>
	</head>
	<body>
		<div class="container" id="login">		
			<div class="row mb-5">
				
				<div class="col-lg-8 col-md-7">
					<div class="hidden-xs">
						<div class="text-center border-bottom border-primary mb-3">
							<img src="{{ url('/storage/asset/images/logo_sip.png') }}" class="w-50">
						</div>
						<p align="justify">
							SIP <strong>(Simply Information Plantation)</strong> merupakan sebuah sistem ERP <strong>(Enterprise Resource Planning)</strong> yang dikembangkan oleh tim dari <strong>PT. Durio Indigo</strong>. SIP memberikan kemudahan kepada perusahaan yang bergerak dibidang perkebunan kelapa sawit dalam menjalankan roda bisnis perusahaan.
						</p>
						<p align="justify">
							SIP memudahkan seluruh pekerjaan mulai dari personalia, pergudangan, keuangan, produksi, penjualan dan lainnya sehingga bisnis perusahaan dijalankan dengan mudah cepat dan akurat, serta laporan yang dihasilkan realtime.
						</p>
					</div>
					<p align="center">
						Daftarkan perusahaan anda sekarang untuk mendapatkan manfaat dari SIP<br/>
						<a href="javascript:;" onclick="formDaftar()" class="btn btn-danger btn-lg rounded-pill w-50 mt-2"><i class="fal fa-plus"></i> Daftar Sekarang</a>
					</p>
				</div>
				<div class="col-lg-4 col-md-5 m-auto">
					<form class="m-auto" action="" method="post">
						<div class="p-2 text-dark text-center">
							<h3 class="m-0">Login <span class="font-weight-bold text-dark">System</span></h3>
						</div>
						<div class="p-3">
							<div>
								<label class="m-0 font-weight-bold">Username</label>
								<input type="text" class="form-control" name="" required>
							</div>
							<div class="mt-3">
								<label class="m-0 font-weight-bold">Password</label>
								<input type="text" class="form-control" name="" required>
							</div>
							<div class="mt-3">
								<button type="submit" class="btn btn-primary rounded-0" onclick="swal('Hello world!','success','error');"><i class="fal fa-sign-in"></i> Masuk</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="daftar" class="pb-5">
			<div class="bg-white rounded p-3 w-50 m-auto">
				<div class=" text-center mb-4 pb-3 border-bottom">
					<h2 class="m-0">Formulir Pendaftaran</h2>
					<small>Silahkan isi informasi perusaahan anda pada formulir berikut</small>
				</div>
				<form method="post" action="">
					<div class="form-group row">
						<label class="col-lg-4 col-form-label">Nama Perusahaan</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" required name="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label">Alamat</label>
						<div class="col-lg-8">
							<textarea class="form-control" required rows="4"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label">Telepon</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" required name="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label"></label>
						<div class="col-lg-8">
							<button type="submit" class="btn btn-primary rounded-0"><i class="fal fa-check"></i> Daftar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<footer class="p-3">
			<div class="container  border-top ">
				<div class="mt-3">
					Powered By <a href="#" target="_blank"><strong>PT. Durio Indigo</strong></a>
				</div>
			</div>
		</footer>
	</body>
</html>