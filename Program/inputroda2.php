<!DOCTYPE html>
<html>
<head>
	<title>SISTEM INFORMASI KENDARAAN BERMOTOR</title>
</head>
<body>
<center>
	<h2>SISTEM INFORMASI KENDARAAN BERMOTOR</h2>
	<h3>Tambah Data Kendaraan bermotor</h3>
	<form action="inputroda2-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Kode Motor</td>
				<td>:</td>
				<td><input type="text" name="kode_motor" required></td>
			</tr>
			<tr>
				<td>Merek Motor</td>
				<td>:</td>
				<td><input type="text" name="merek_motor" size="30" required></td>
			</tr>
			<tr>
				<td>Warna Motor</td>
				<td>:</td>
				<td>
					<select name="warna_motor" required>
						<option value="">Pilih Warna</option>
						<option value="Putih">Putih</option>
						<option value="Hitam">Hitam</option>
						<option value="Merah">Merah</option>
						<option value="Silver">Silver</option>
						<option value="Biru">Biru</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga_motor" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambahroda2" value="Tambah Kendaraan Roda 2"></td>
			</tr>
		</table>
	</form>
		<p><a href="index.php">Home</a> | <a href="tambah.php">Tambah Data Kendaraan</a></p>
	</center>
</body>
</html>