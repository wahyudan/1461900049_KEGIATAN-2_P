<!DOCTYPE html>
<html>
<head>
<title>1461900049 - Wahyu Danni Setiawan</title>
</head>
<body>
<h2><center>Data Anggota<center></h2>
<p><center>Cari Anggota :</center></p>
<center><form action="/anggota/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari Anggota .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form></center>
<center><table border="1">
<tr>
<th>Anggota_Id</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
<th>No.Telp</th>
</tr>
@foreach($anggota as $p)
<tr>
<td>{{ $p->anggota_id }}</td>
<td>{{ $p->anggota_nama }}</td>
<td>{{ $p->anggota_alamat }}</td>
<td>{{ $p->anggota_jk }}</td>
<td>{{ $p->anggota_telp }}</td>
</tr>
@endforeach
</table></center>
</body>
</html>