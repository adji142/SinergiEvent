<?php
session_start();
include '../koneksi.php';
$id= $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$fasilitas = $_POST['Fasilitas'];
$kapasitas =$_POST['kapasitas'];
$img = $_FILES['gambar'];
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "../gambar/".$nama_file;
$gas = substr($path, 3);
if($nama_file==""){
				$query = "UPDATE item SET  nama='$nama',harga=$harga,vasilitas='$fasilitas',kapasitas=$kapasitas where id =$id";
				$sql = mysql_query($query) or die(mysql_error());
				if($sql){
					header("location: item.php?id=success");
				}
				else{
					header("location: item.php?id=error");
				}
			}
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
	if($ukuran_file <= 1000000){ 
		if(move_uploaded_file($tmp_file, $path)){
			$query1 = "UPDATE item SET  nama='$nama',harga='$harga',durasi=$durasi,vasilitas='$fasilitas',mesin='$mesin',tahun_pembuatan=$tahun,kapasitas=$kapasitas,nopol='$nopol',img='$gas' where id=$id";
			$sql1 = mysql_query($query1)or die(mysql_error());
			if($sql1){
				header("location: item.php?id=success"); // Redirectke halaman index.php
			}else{
				// Jika Gagal, Lakukan :
				header("location: item.php?id=error");
			}
		
		}else{
			// Jika gambar gagal diupload, Lakukan :
			header("location: item.php?id=error_up");
		}
	}else{
		// Jika ukuran file lebih dari 1MB, lakukan :
		header("location: item.php?id=error_up");
	}
}else{
	// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
	header("location: item.php?id=error_up");
}
?>