<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$query ="delete from pemesanan where id = $id";
	$rs = mysql_query($query) or die(mysql_error());
	if($rs){
		echo '<script type="text/javascript">';
    	echo 'alert("Data Berhasil di hapus");';
    	echo '(window.location= "pemesanan.php");';
    	echo '</script>';
	}
	else{
		echo '<script type="text/javascript">';
    	echo 'alert("Data Gagal di hapus");';
    	echo '(window.location= "pemesanan.php");';
    	echo '</script>';
	}
?>