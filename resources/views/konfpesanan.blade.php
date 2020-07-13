<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- my font -->
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section>
		<div class="container">
			<div class="row justify-content-center mt-5">
				<div class="col-md-6">
					<div class="card" style="width: 25rem;">
					  <div class="card-body">
					    <h5 class="card-title text-center">Note kepada petugas</h5>
					    <h6 class="card-title text-center text-muted">Note ini akan di kirim ke petugas dan petugas segera datang</h6>
                      <p class="card-text">Jenis Sampah: {{$sampahs -> jenis}}</p>
					    <p class="card-text">Berat sampah:</p>
					    <p class="card-text">Alamat:</p>
					    <p class="card-text">Harga:</p>
					    <p class="card-text">Pesan kepada petugas:</p>
					    <a href="#" class="card-link"><button class="btn btn-success">kirim</button></a>
					    <a href="#" class="card-link"><button class="btn btn-danger">hapus</button></a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>