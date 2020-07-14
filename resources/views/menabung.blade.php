@extends('layouts.appcrud')

@section('content')

	<br>
	<br>
	<h2 class="text-center text-white py-5">Isikan form untuk membuang sampah</h2>

	<section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col col-md-6">
				<form method="post" action="/data">
						@csrf
						<div class="form-group ">
							<label class="text-white" for="jenis">jenis sampah</label>
							<select class="form-control bg-transparent text-white" id="jenis" name="jenis">
								<option>Keras</option>
								<option>Cair</option>
							</select>
						</div>

						<div class="form-group">
							<label class="text-white" for="berat">berat</label>
							<div class="input-group input-group-md">
								<input type="text" class="form-control bg-transparent text-white" id="berat" name="berat">
								<div class="input-group-prepend">
									<span class="input-group-text">Kg</span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="text-white" for="alamat">alamat</label>
							<input type="text" class="form-control bg-transparent text-white" id="alamat" name="alamat">
						</div>

						<div class="form-group">
							<label class="text-white" for="pesan">pesan untuk petugas</label>
							<textarea type="text" class="form-control bg-transparent text-light" id="pesan" name="pesan"></textarea>
						</div>

						 <button type="submit" class="btn btn-primary">Hitung</button>
					</form>
				</div>
			</div>
		</div>
	</section>

@endsection