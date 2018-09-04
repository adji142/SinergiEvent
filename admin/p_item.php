<?php
session_start();
include '../koneksi.php';
$id= $_POST['id'];//
$nama = $_POST['nama'];//
$harga = $_POST['harga'];//
$fasilitas = $_POST['Fasilitas'];//
$kapasitas =$_POST['kapasitas'];//
//upload
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "../gambar/".$nama_file;
$gas = substr($path, 3);
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
	if($ukuran_file <= 1000000){ 
		if(move_uploaded_file($tmp_file, $path)){
			$query = "INSERT INTO item VALUES($id,'$nama','$harga','','$fasilitas','','',$kapasitas,'','$gas')";
			$sql = mysql_query($query);
			if($sql){
				header("location: item.php?id=success"); // Redirectke halaman index.php
			}else{
				// Jika Gagal, Lakukan :
				header("location: item.php?id=error");
			}
		}else{
			// Jika gambar gagal diupload, Lakukan :
			header("location: item.php?id=error");
		}
	}else{
		// Jika ukuran file lebih dari 1MB, lakukan :
		header("location: item.php?id=error");
	}
}else{
	// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
	header("location: item.php?id=error");
}
?>