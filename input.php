<!DOCTYPE html>
<?php
	include "db.php";
	?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="input.css">
</head>
<body>

	<a href="rawat.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form method="POST" action="input-prs.php">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>jenis kelamin</td>
				<td><input type="text" name="jenis_kelamin"></td>					
			</tr>	
			<tr>
				<td>nomor rekam medis</td>
				<td><input type="text" name="nomor_rekam_medis"></td>					
			</tr>	
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tgl_lahir"></td>					
			</tr>
			<tr>
				<td>Asuransi</td>
				<td><input type="text" name="asuransi"></td>					
			</tr>
			<tr>
				<td>Asal</td>
				<td><input type="text" name="asal"></td>					
			</tr>
			<tr>
				<td>Spesialis</td>
				<td><input type="text" name="spesialis"></td>					
			</tr>
			<tr>
				<td>Dokter</td>
				<td><input type="text" name="dokter"></td>					
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>					
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td><input type="text" name="nomor_hp"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>

</body>
</html>

