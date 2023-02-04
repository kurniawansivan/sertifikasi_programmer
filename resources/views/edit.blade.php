<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<style>
		.max-w-7xl{
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			margin: auto;
			padding: 1rem;
		}
		.form-card{
			background-color: #f7f7f7;
			padding: 1.5rem;
			border-radius: 10px;
			box-shadow: 2px 2px 10px #ddd;
		}
	</style>
</head>
<body>
<div class="max-w-7xl">
	<div class="form-card">
		<h3 class="text-center mb-3">Edit Pegawai</h3>
		@foreach($pegawai as $p)
		<form action="/pegawai/update" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id_pegawai" value="{{ $p->id_pegawai }}">
			<div class="form-group">
				<label for="nip">NIP</label>
				<input type="text" required="required" name="nip" value="{{ $p->nip }}" class="form-control">
			</div>
			<div class="form-group">
				<label for="nama_pegawai">Nama</label>
				<input type="text" required="required" name="nama_pegawai" value="{{ $p->nama_pegawai }}" class="form-control">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea required="required" name="alamat" class="form-control">{{ $p->alamat }}</textarea>
			</div>
			<div class="form-group">
				<label for="no_telepon">No. Telepon</label>
				<input type="text" required="required" name="no_telepon" value="{{ $p->no_telepon }}" class="form-control">
			</div>
			<div class="d-flex justify-content-between">
				<a href="/pegawai" class="btn btn-danger">Kembali</a>
				<input type="submit" value="Simpan" class="btn btn-success">
		</div>
	</form>
	@endforeach
</div>	
		
</body>
</html>