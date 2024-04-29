<!DOCTYPE html>
<html>
<head>
	<title>Dashboard mahasiswa</title>
</head>
<body>
 
	<h2>Dashboard</h2>
	<p>
		Ini adalah Database mahasiswa Kelas Pemrograman Web Kelas A
	</p>
	<h3>Data mahasiswa</h3>
 
	<a href="/student/add"> + Tambah data mahasiswa</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
            <th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Telepon</th>
			<th>IPK</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $mhs)
		<tr>
            <td>{{ $mhs->nim }}</td>
			<td>{{ $mhs->nama }}</td>
			<td>{{ $mhs->alamat }}</td>
			<td>{{ $mhs->notelp }}</td>
			<td>{{ $mhs->ipk }}</td>
			<td>
				<a href="/student/edit/{{ $mhs->nim }}">Edit</a>
				|
				<a href="/student/delete/{{ $mhs->nim }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>