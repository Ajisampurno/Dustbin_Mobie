<style>

	span{
		color: #19B3D3;
		font-family: 'Pangolin', cursive;
	}

	h3{
		color: #1cfa79;
		margin: 0;
		text-transform: uppercase;
		font-size: 22px;
		font-weight: 900;
		font-family: 'Pangolin', cursive;
	}

</style>

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

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
		<h3>Dustman <span>mobile</span></h3>
	 
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
	 
		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			
			<ul class="navbar-nav ml-auto">	
				<form class="form-inline" action="data" method="get">
					<div class="form-group">
						<input type="text" class="form-control" id="cari" name="cari" placeholder="masukan data yang di cari">
					</div>
	
					<button type="submit" class="btn btn-info">Cari</button>
				</form>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Option
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{('home')}}">Home</a>
					<a class="dropdown-item" href="{{('menabung')}}">Buang</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Setting</a>
					<a href="{{('logout') }}" class="dropdown-item"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
				</div>
				</li>
		  </ul>	
		</div>
	 
	</nav>

	<div class="container pt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<table class="table table-dark">
					<thead>
					  <tr>
						<th scope="col">#</th>
						<th scope="col">jenis</th>
						<th scope="col">berat</th>
						<th scope="col">alamat</th>
						<th scope="col">pesan</th>
						<th scope="col">atur</th>
					</tr>
					</thead>
					<tbody>
						@foreach($sampahs as $sampah)
						<tr>
						<td>{{ $loop -> iteration}}</td>
						<td>{{ $sampah -> jenis}}</td>
						<td>{{ $sampah -> berat}}</td>
						<td>{{ $sampah -> alamat}}</td>
						<td>{{ $sampah -> pesan}}</td>
						<td>
							<a href="/detail/{{$sampah -> id}}" class="badge badge-info">show</a>
						</td>
					  </tr>
					  @endforeach
					</tbody>
				  </table>
			</div>
		</div>
	</div>
</body>
</html>