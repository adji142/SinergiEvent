<?php 
session_start(); 
include "koneksi.php"; 
$username=$_POST['username']; 
$password=md5($_POST['password']); 
$query=mysql_query("select * from admin where username='$username' and password='$password'") or die(mysql_error());
$cek=mysql_num_rows($query); 
echo $cek;
if($cek > 0){ 
$_SESSION['username']=$username; 
	header("location:admin/index.php");
}else{ 
	header("location:admin.php?id=err");
} 
?>