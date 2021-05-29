<!DOCTYPE html>
<html>
<head>
	<title>Tugas Bootcamp Rnd Pekan 2</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter </h1>
		<h2>Halaman Tampilan Awal</h2>
		<h3>Rouf Ubaydillah/A018024/2018</h3>
	</center> 
	<center><?php echo anchor('/crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
			      <?php echo anchor('/crud/edit/'.$u->id,'Edit'); ?>
				  <?php echo anchor('/crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>