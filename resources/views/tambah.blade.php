<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pegawai</title>
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
		<h3 class="text-center mb-3">Tambah Data Pegawai</h3>
		<form action="/pegawai/store" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="nip">NIP</label>
				<input type="text" name="nip" class="form-control" id="nip" required="required">
			</div>
			<div class="form-group">
				<label for="nama_pegawai">Nama</label>
				<input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" required="required">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea name="alamat" class="form-control" id="alamat" required="required"></textarea>
			</div>
			<div class="form-group">
				<label for="no_telepon">No. Telepon</label>
				<input type="text" name="no_telepon" class="form-control" id="no_telepon" required="required">
			</div>
			<div class="d-flex justify-content-between">
				<a href="/pegawai" class="btn btn-danger">Kembali</a>
				<input type="submit" value="Simpan" class="btn btn-success">
			</div>
		</form>
	</div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>