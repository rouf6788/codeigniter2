<!DOCTYPE html>
<html>
<head>
	<title>Tugas Bootcamp Rnd Pekan 2</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter </h1>
		<h2>HalamanTambah data baru</h2>
		<h3>Rouf Ubaydillah/A018024/2018</h3>
	</center>
	<form action="<?php echo base_url(). '/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>