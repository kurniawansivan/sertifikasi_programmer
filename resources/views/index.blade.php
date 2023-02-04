<!DOCTYPE html>
<html>
<head>
	<title>Sertifikasi CRUD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	
	<style>
		.container: {
			display: "flex";
			width: "full";
			gap: 10px;
		}
		.add-button: {
			display: "flex";
			justify-content: "flex-end";
			align-items: "flex-end";
			width: "full";
		}
		</style>
</head>
<body>
	<div class="container">
	<h2>Ivan Kurniawan Sentosa</h2>
	<h6>Data Pegawai</h6>
	<div class="table-responsive">
	<table border="1" class="table table-striped align-middle">
		<thead>

		<tr>
			<th scope="col">ID</th>
			<th scope="col">NIP</th>
			<th scope="col">Nama</th>
			<th scope="col">Alamat</th>
         <th scope="col">No.Telepon</th>
			<th scope="col">Opsi</th>
		</tr>
</thead>
			@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->id_pegawai}}</td>
			<td>{{ $p->nip }}</td>
			<td>{{ $p->nama_pegawai }}</td>
			<td>{{ $p->alamat }}</td>
            <td>{{ $p->no_telepon }}</td>
			<td>
				<a class="btn btn-warning" href="/pegawai/edit/{{ $p->id_pegawai }}">Edit</a>
				|
				<a class="btn btn-danger" href="/pegawai/hapus/{{ $p->id_pegawai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	<div class="add-button">
	<a class="btn btn-primary" href="/pegawai/tambah/">Tambah Data Pegawai</a>
	</div>
</div>
 
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
