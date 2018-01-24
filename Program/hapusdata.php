<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT id FROM motor WHERE id='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM motor WHERE id='$id'");
		
		if($del){
			header("location: index.php");
		}else{
			
			echo 'Data GAGAL dihapus ';		
			echo '<a href="index.php">Kembali</a>';	
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>