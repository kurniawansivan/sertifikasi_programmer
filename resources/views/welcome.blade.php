<!DOCTYPE html>
<html>
<head>
	<title>Sertifikasi CRUD</title>
</head>
<body>
 
	<h2>Ivan Kurniawan Sentosa</h2>
	<h3>Data Pegawai</h3>
 
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Alamat</th>
            <th>No.Telepon</th>
			<th>Opsi</th>
		</tr>
			@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->id_pegawai}}</td>
			<td>{{ $p->nip }}</td>
			<td>{{ $p->nama_pegawai }}</td>
			<td>{{ $p->alamat }}</td>
            <td>{{ $p->no_telepon }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->id_pegawai }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->id_pegawai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>
