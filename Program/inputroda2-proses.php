<?php
if(isset($_POST['tambahroda2'])){
	include('koneksi.php');
	$kode_motor		= $_POST['kode_motor'];	
	$merek_motor		= $_POST['merek_motor'];	
	$warna_motor		= $_POST['warna_motor'];	
	$harga_motor	= $_POST['harga_motor'];	
	$input = mysql_query("INSERT INTO motor VALUES(NULL, '$kode_motor', '$merek_motor', '$warna_motor', '$harga_motor')") or die(mysql_error());
	
	if($input){
		header("location: index.php");
	}else{
		echo 'Gagal menambahkan data! ';		
		echo '<a href="index.php">Kembali</a>';
	}
}else{	
	echo '<script>window.history.back()</script>';
}
?>