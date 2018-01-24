<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Kendaraan</title>
</head>
<body>
<center>
	<h2>SISTEM INFORMASI KENDARAAN BERMOTOR</h2>
	<h3>Edit Data Kendaraan</h3>
	<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM motor WHERE id='$id'");
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysql_fetch_assoc($show);
	}
	?>
	
	<form action="ubah-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Kode motor</td>
				<td>:</td>
				<td><input type="varchar" name="kode_motor" value="<?php echo $data['kode_motor']; ?>" required readonly></td>	
			</tr>
			<tr>
				<td>Merek motor</td>
				<td>:</td>
				<td><input type="text" name="merek_motor" size="30" value="<?php echo $data['merek_motor']; ?>" required></td> 
			</tr>
			<tr>
				<td>Warna motor</td>
				<td>:</td>
				<td>
					<select name="warna_motor" required>
						<option value="">Pilih Warna</option>
						<option value="Putih" <?php if($data['warna_motor'] == 'Putih'){ echo 'selected'; } ?>>Putih</option>	
						<option value="Hitam" <?php if($data['warna_motor'] == 'Hitam'){ echo 'selected'; } ?>>Hitam</option>	
						<option value="Merah" <?php if($data['warna_motor'] == 'Merah'){ echo 'selected'; } ?>>Merah</option>	
						<option value="Silver" <?php if($data['warna_motor'] == 'Silver'){ echo 'selected'; } ?>>Silver</option>
						<option value="Biru" <?php if($data['warna_motor'] == 'Biru'){ echo 'selected'; } ?>>Biru</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Harga motor</td>
				<td>:</td>
				<td><input type="text" name="harga_motor" size="30" value="<?php echo $data['harga_motor']; ?>" required></td> 
			</tr>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Ubah Data Kendaraan"></td>
			</tr>
		</table>
	</form>
	<p><a href="index.php">Home</a> | <a href="inputdatakendaraan.php">Tambah Data Kendaraan</a></p>
	</center>
</body>
</html>