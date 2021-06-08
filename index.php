<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet"  href="style.css">

<title>Data Barang</title>
</head>
<body>
	   
<div class="container">
	<header> Modularasi mengunakan require </header>
	<nav class="header">
			<a href="#">home</a>
			<a href="#">tentang</a>
			<a href="#">kontak</a>
		</nav>
<h1>Data Barang</h1>
<div class="main">
<table border="solid">
		<tr>
			<th>Gambar</th>
			<th>Nama Barang</th>
			<th>Katagori</th>
			<th>Harga Jual</th>
			<th>Harga Beli</th>
			<th>Stok</th>
			<th>Aksi</th>
		</tr>
		<?php if($result): ?>
		<?php while($row = mysqli_fetch_array($result)): ?>
		<tr>
			
			<td><?= $row['nama'];?></td>
			<td><?= $row['kategori'];?></td>
			<td><?= $row['harga_beli'];?></td>
			<td><?= $row['harga_jual'];?></td>
			<td><?= $row['stok'];?></td>
			<td><?= $row['id_barang'];?></td>
			<td> <a href="hapus"> ubah hapus </a> </td>
		</tr>
		<?php endwhile; else: ?>
		<tr>
		<td colspan="7">Belum ada data</td>
		</tr>
		<?php endif; ?>
</table>
</div>
<footer>
			<p> &copy; 2021,informatika,universitas pelita bangsa</p>
		</footer>
</div>
</body>
</html>