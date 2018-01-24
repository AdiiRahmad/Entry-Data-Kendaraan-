<!DOCTYPE html>
<html>
<head>
	<title>SISTEM INFORMASI KENDARAAN BERMOTOR</title>
</head>
<body>
<center>
	<h2>SISTEM INFORMASI KENDARAAN BERMOTOR</h2>
	<h3>Data Kendaraan BERMOTOR</h3>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="green">
			<th>No.</th>
			<th>Kode Motor</th>
			<th>Merek Motor</th>
			<th>Warna</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
		<?php
		include('koneksi.php');
		$query = mysql_query("SELECT * FROM motor ORDER BY kode_motor ASC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6"><center>Tidak ada data!</center></td></tr>';
		}else{	
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td><center>'.$no.'</center></td>';	
					echo '<td><center>'.$data['kode_motor'].'</center></td>';	
					echo '<td><center>'.$data['merek_motor'].'</center></td>';	
					echo '<td><center>'.$data['warna_motor'].'</center></td>';	
					echo '<td><center>Rp.'.$data['harga_motor'].'</center></td>';	
					echo '<td><center><a href="ubahdata.php?id='.$data['id'].'">Ubah</a> | <a href="hapusdata.php?id='.$data['id'].'" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a></td>';
				echo '</tr>';			
				$no++;			
			}		
		}
		?>
	</table>
		<p><a href="inputdatakendaraan.php">Tambah Data Kendaraan ---- ></a></p>
</center>
</body>
</html>