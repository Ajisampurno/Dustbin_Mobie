<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
</head>
<body>

    <h1 class="text-center py-5">Halaman Edit Data</h1>
    <section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col col-md-8">
                <form method="post" action="/data/{{$sampah -> id}}">
                    @method('patch')
					@csrf
						<div class="form-group">
							<label for="jenis">jenis</label>
                        <input type="text" class="form-control" id="jenis" name="jenis" value="{{$sampah -> jenis}}">
						</div>

						<div class="form-group">
							<label for="berat">berat</label>
							<input type="text" class="form-control" id="berat" name="berat" value="{{$sampah -> berat}}">
						</div>
						<div class="form-group">
							<label for="alamat">alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat" value="{{$sampah -> alamat}}">
						</div>
						<div class="form-group">
							<label for="pesan">pesan</label>
							<input type="text" class="form-control" id="pesan" name="pesan" value="{{$sampah -> pesan}}">
						</div>

						 <button type="submit" class="btn btn-primary">Hitung</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
