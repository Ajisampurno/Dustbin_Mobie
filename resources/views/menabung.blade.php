@extends('layouts.appcrud')

@section('content')

	<br>
	<br>
	<h2 class="text-center py-5">Isikan form untuk membuang sampah</h2>

	<section>
		<div class="container">
			<div class="row ">
				<div class="col col-md-8">
				<form method="post" action="/data">
						@csrf
						<div class="form-group">
							<label for="jenis">jenis</label>
							<input type="text" class="form-control" id="jenis" name="jenis">
						</div>

						<div class="form-group">
							<label for="berat">berat</label>
							<input type="text" class="form-control" id="berat" name="berat">
						</div>
						<div class="form-group">
							<label for="alamat">alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat">
						</div>
						<div class="form-group">
							<label for="pesan">pesan</label>
							<input type="text" class="form-control" id="pesan" name="pesan">
						</div>

						 <button type="submit" class="btn btn-primary">Hitung</button>
					</form>
				</div>
			</div>
		</div>
	</section>

@endsection