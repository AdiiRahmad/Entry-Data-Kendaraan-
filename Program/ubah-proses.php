<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id			= $_POST['id'];
	$kode_motor		= $_POST['kode_motor'];
	$merek_motor		= $_POST['merek_motor'];	
	$warna_motor		= $_POST['warna_motor'];	
	$harga_motor	= $_POST['harga_motor'];	
	$update = mysql_query("UPDATE motor SET kode_motor='$kode_motor', merek_motor='$merek_motor', warna_motor='$warna_motor', harga_motor='$harga_motor' WHERE id='$id'") or die(mysql_error());
	
	if($update){
		header("location: index.php");	
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="index.php?id='.$id.'">Kembali</a>';	
	}
}else{	

	echo '<script>window.history.back()</script>';

}
?>