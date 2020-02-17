@extends('layouts.main')

@section('title', 'Form Laporan')

@section('content')
<div class="container mt-4">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-body">

					<form action="/success" method="POST">
						@csrf
						<label>nama lengkap</label>
						<input type="text" class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap" name="namalengkap" placeholder="Masukkan nama lengkap...">

						@error('namalengkap')
						<div class="text-danger">{{$message}}</div>
						@enderror


						<label>keluhan</label>
						<select name="keluh" id="keluh" class="form-control">
							<option hidden>keluhan</option>
							<option value="Kebersihan">kebersihan</option>
							<option value="Fasilitas">fasilitas</option>
							<option value="Administrasi">administrasi</option>
						</select>
						<label>kelas</label>
						<select name="kelas" id="kelas" class="form-control">
							<option hidden>kelas</option>
							<option value="X">X</option>
							<option value="XI">XI</option>
							<option value="XII">XII</option>
						</select>
						<label>Nomor Handphone</label>
						<input type="text" class="form-control @error('nomorhp') is-invalid @enderror" name="nomorhp" id="nomorhp" placeholder="Masukkan Nomor Handphone...">

						@error('namalengkap')
						<div class="text-danger">{{$message}}</div>
						@enderror

						<label>jenis kelamin</label>
							<select name="jeniskelamin" id="jeniskelamin" class="form-control">
							<option hidden>jenis kelamin</option>
							<option value="Laki-laki">laki-laki</option>
							<option value="Perempuan">perempuan</option>
							<option value="Tidakdisebutkan">tidak disebutkan</option>
							</select>
						<label>komentar</label>
						<textarea name="kategori" id="kategori" cols="10" rows="3" class="form-control"></textarea>	
						<button type="submit" class="btn btn-outline-primary float-right mt-3">Kirim Laporan</button> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection